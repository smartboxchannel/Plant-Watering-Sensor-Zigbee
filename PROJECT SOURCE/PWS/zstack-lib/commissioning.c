#include "commissioning.h"
#include "Debug.h"
#include "OSAL_PwrMgr.h"
#include "ZDApp.h"
#include "bdb_interface.h"
#include "hal_key.h"
#include "hal_led.h"

static void zclCommissioning_ProcessCommissioningStatus(bdbCommissioningModeMsg_t *bdbCommissioningModeMsg);
static void zclCommissioning_ResetBackoffRetry(void);
static void zclCommissioning_BindNotification(bdbBindNotificationData_t *data);
extern bool requestNewTrustCenterLinkKey;

byte rejoinsLeft = APP_COMMISSIONING_END_DEVICE_REJOIN_TRIES;
uint32 rejoinDelay = APP_COMMISSIONING_END_DEVICE_REJOIN_START_DELAY;

uint8 zclCommissioning_TaskId = 0;

#ifndef APP_TX_POWER
    #define APP_TX_POWER TX_PWR_PLUS_4
#endif

void zclCommissioning_Init(uint8 task_id) {
    zclCommissioning_TaskId = task_id;

    bdb_RegisterCommissioningStatusCB(zclCommissioning_ProcessCommissioningStatus);
    bdb_RegisterBindNotificationCB(zclCommissioning_BindNotification);

    ZMacSetTransmitPower(APP_TX_POWER);

    // this is important to allow connects throught routers
    // to make this work, coordinator should be compiled with this flag #define TP2_LEGACY_ZC
    requestNewTrustCenterLinkKey = FALSE;
    bdb_StartCommissioning(BDB_COMMISSIONING_MODE_NWK_STEERING | BDB_COMMISSIONING_MODE_FINDING_BINDING);
}

static void zclCommissioning_ResetBackoffRetry(void) {
    rejoinsLeft = APP_COMMISSIONING_END_DEVICE_REJOIN_TRIES;
    rejoinDelay = APP_COMMISSIONING_END_DEVICE_REJOIN_START_DELAY;
}

static void zclCommissioning_OnConnect(void) {
    LREPMaster("zclCommissioning_OnConnect \r\n");
    zclCommissioning_ResetBackoffRetry();
    osal_start_timerEx(zclCommissioning_TaskId, APP_COMMISSIONING_CLOCK_DOWN_POLING_RATE_EVT, 10 * 1000);
}

static void zclCommissioning_ProcessCommissioningStatus(bdbCommissioningModeMsg_t *bdbCommissioningModeMsg) {
    LREP("bdbCommissioningMode=%d bdbCommissioningStatus=%d bdbRemainingCommissioningModes=0x%X\r\n",
         bdbCommissioningModeMsg->bdbCommissioningMode, bdbCommissioningModeMsg->bdbCommissioningStatus,
         bdbCommissioningModeMsg->bdbRemainingCommissioningModes);
    switch (bdbCommissioningModeMsg->bdbCommissioningMode) {
    case BDB_COMMISSIONING_INITIALIZATION:
        switch (bdbCommissioningModeMsg->bdbCommissioningStatus) {
        case BDB_COMMISSIONING_NO_NETWORK:
            LREP("No network\r\n");
            HalLedBlink(HAL_LED_1, 3, 50, 500);
            break;
        case BDB_COMMISSIONING_NETWORK_RESTORED:
            zclCommissioning_OnConnect();
            break;
        default:
            break;
        }
        break;
    case BDB_COMMISSIONING_NWK_STEERING:
        switch (bdbCommissioningModeMsg->bdbCommissioningStatus) {
        case BDB_COMMISSIONING_SUCCESS:
            HalLedBlink(HAL_LED_1, 5, 50, 500);
            LREPMaster("BDB_COMMISSIONING_SUCCESS\r\n");
            zclCommissioning_OnConnect();
            break;

        default:
            HalLedSet(HAL_LED_1, HAL_LED_MODE_BLINK);
            break;
        }

        break;

    case BDB_COMMISSIONING_PARENT_LOST:
        LREPMaster("BDB_COMMISSIONING_PARENT_LOST\r\n");
        switch (bdbCommissioningModeMsg->bdbCommissioningStatus) {
        case BDB_COMMISSIONING_NETWORK_RESTORED:
            zclCommissioning_ResetBackoffRetry();
            break;

        default:
            HalLedSet(HAL_LED_1, HAL_LED_MODE_BLINK);
            // // Parent not found, attempt to rejoin again after a exponential backoff delay
            LREP("rejoinsLeft %d rejoinDelay=%ld\r\n", rejoinsLeft, rejoinDelay);
            if (rejoinsLeft > 0) {
                rejoinDelay *= APP_COMMISSIONING_END_DEVICE_REJOIN_BACKOFF;
                rejoinsLeft -= 1;
            } else {
                rejoinDelay = APP_COMMISSIONING_END_DEVICE_REJOIN_MAX_DELAY;
            }
            osal_start_timerEx(zclCommissioning_TaskId, APP_COMMISSIONING_END_DEVICE_REJOIN_EVT, rejoinDelay);
            break;
        }
        break;
    default:
        break;
    }
}

static void zclCommissioning_ProcessIncomingMsg(zclIncomingMsg_t *pInMsg) {
    if (pInMsg->attrCmd) {
        osal_mem_free(pInMsg->attrCmd);
    }
}

void zclCommissioning_Sleep(uint8 allow) {
    LREP("zclCommissioning_Sleep %d\r\n", allow);
#if defined(POWER_SAVING)
    if (allow) {
        NLME_SetPollRate(0);
    } else {
        NLME_SetPollRate(POLL_RATE);
    }
#endif
}

uint16 zclCommissioning_event_loop(uint8 task_id, uint16 events) {
    if (events & SYS_EVENT_MSG) {
        devStates_t zclApp_NwkState;
        afIncomingMSGPacket_t *MSGpkt;
        while ((MSGpkt = (afIncomingMSGPacket_t *)osal_msg_receive(zclCommissioning_TaskId))) {

            switch (MSGpkt->hdr.event) {
            case ZDO_STATE_CHANGE:
                HalLedSet(HAL_LED_1, HAL_LED_MODE_BLINK);
                zclApp_NwkState = (devStates_t)(MSGpkt->hdr.status);
                LREP("NwkState=%d\r\n", zclApp_NwkState);
                if (zclApp_NwkState == DEV_END_DEVICE) {
                    HalLedSet(HAL_LED_1, HAL_LED_MODE_OFF);
                }
                break;

            case ZCL_INCOMING_MSG:
                zclCommissioning_ProcessIncomingMsg((zclIncomingMsg_t *)MSGpkt);
                break;

            default:
                break;
            }

            // Release the memory
            osal_msg_deallocate((uint8 *)MSGpkt);
        }

        // return unprocessed events
        return (events ^ SYS_EVENT_MSG);
    }
    if (events & APP_COMMISSIONING_END_DEVICE_REJOIN_EVT) {
        LREPMaster("APP_END_DEVICE_REJOIN_EVT\r\n");
#if ZG_BUILD_ENDDEVICE_TYPE
        bdb_ZedAttemptRecoverNwk();
#endif
        return (events ^ APP_COMMISSIONING_END_DEVICE_REJOIN_EVT);
    }

    if (events & APP_COMMISSIONING_CLOCK_DOWN_POLING_RATE_EVT) {
        LREPMaster("APP_CLOCK_DOWN_POLING_RATE_EVT\r\n");
        zclCommissioning_Sleep(true);
        return (events ^ APP_COMMISSIONING_CLOCK_DOWN_POLING_RATE_EVT);
    }

    // Discard unknown events
    return 0;
}

static void zclCommissioning_BindNotification(bdbBindNotificationData_t *data) {
    HalLedSet(HAL_LED_1, HAL_LED_MODE_BLINK);
    LREP("Recieved bind request clusterId=0x%X dstAddr=0x%X ep=%d\r\n", data->clusterId, data->dstAddr, data->ep);
    uint16 maxEntries = 0, usedEntries = 0;
    bindCapacity(&maxEntries, &usedEntries);
    LREP("bindCapacity %d %usedEntries %d \r\n", maxEntries, usedEntries);
}

void zclCommissioning_HandleKeys(uint8 portAndAction, uint8 keyCode) {
    if (portAndAction & HAL_KEY_PRESS) {
#if ZG_BUILD_ENDDEVICE_TYPE
        if (devState == DEV_NWK_ORPHAN) {
            LREP("devState=%d try to restore network\r\n", devState);
            bdb_ZedAttemptRecoverNwk();
        }
#endif
    }
    #if defined(POWER_SAVING)
        NLME_SetPollRate(1);
    #endif
}