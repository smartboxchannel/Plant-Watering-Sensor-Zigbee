#include "tl_resetter.h"
#include "Debug.h"
#include "Osal_Memory.h"
#include "bdb.h"
#include "bdb_interface.h"
#include "bdb_touchlink.h"
#include "bdb_touchlink_initiator.h"
#include "hal_key.h"
#include "hal_led.h"

#ifndef TL_RESETTER_TRIGGER_KEY
    #define TL_RESETTER_TRIGGER_KEY 2
#endif


#ifndef TL_RESETTERL_START_DELAY
    #define TL_RESETTERL_START_DELAY 5 * 1000
#endif

#ifndef TL_RESETTERL_REPEAT_DELAY
    #define TL_RESETTERL_REPEAT_DELAY 1 * 1000
#endif

#ifndef TL_RESETTER_ATTEMPTS_COUNT
    #define TL_RESETTER_ATTEMPTS_COUNT 10
#endif

#define TL_RESETTER_START_TL_EVT 0x0001
#define TL_RESETTER_RETRY_TL_EVT 0x0002

static void zclTouchLinkResetter_StartTL(void);
static ZStatus_t zclTouchLinkResetter_TL_NotifyCb(epInfoRec_t *pData);


uint8 zclTouchLinkResetter_TaskId = 0;
uint8 zclTouchLinkResetter_CurrentAttempt = 0;

static void zclTouchLinkResetter_StartTL(void) {
    LREP("zclTouchLinkResetter_StartTL attempt=%d\r\n", zclTouchLinkResetter_CurrentAttempt);
    HalLedSet(HAL_LED_1, HAL_LED_MODE_FLASH);
    if (zclTouchLinkResetter_CurrentAttempt < TL_RESETTER_ATTEMPTS_COUNT) {
        touchLinkInitiator_StartDevDisc();
        zclTouchLinkResetter_CurrentAttempt += 1;
        osal_start_timerEx(zclTouchLinkResetter_TaskId, TL_RESETTER_RETRY_TL_EVT, TL_RESETTERL_REPEAT_DELAY);
    }
}

ZStatus_t zclTouchLinkResetter_TL_NotifyCb(epInfoRec_t *pData) {
    LREPMaster("zclTouchLinkResetter_TL_NotifyCb\r\n");
    osal_stop_timerEx(zclTouchLinkResetter_TaskId, TL_RESETTER_RETRY_TL_EVT);
    touchLinkInitiator_ResetToFNSelectedTarget();
    HalLedSet(HAL_LED_1, HAL_LED_MODE_OFF);
    return ZSuccess;
}

void zclTouchLinkRestter_Init(uint8 task_id) {
    zclTouchLinkResetter_TaskId = task_id;
    touchLinkInitiator_RegisterNotifyTLCB(zclTouchLinkResetter_TL_NotifyCb);
}

uint16 zclTouchLinkRestter_event_loop(uint8 task_id, uint16 events) {
    LREP("zclTouchLinkRestter_event_loop 0x%X\r\n", events);
    if (events & TL_RESETTER_START_TL_EVT) {
        zclTouchLinkResetter_CurrentAttempt = 0;
        zclTouchLinkResetter_StartTL();
        return (events ^ TL_RESETTER_START_TL_EVT);
    }

    if (events & TL_RESETTER_RETRY_TL_EVT) {
        LREPMaster("TL_RESETTER_RETRY_TL_EVT\r\n");
        zclTouchLinkResetter_StartTL();
        return (events ^ TL_RESETTER_RETRY_TL_EVT);
    }

    return 0;
}

void zclTouchLinkRestter_HandleKeys(uint8 portAndAction, uint8 keyCode) {
    if (portAndAction & HAL_KEY_PRESS) {
        if (keyCode == TL_RESETTER_TRIGGER_KEY) {
            osal_start_timerEx(zclTouchLinkResetter_TaskId, TL_RESETTER_START_TL_EVT, TL_RESETTERL_START_DELAY);
        }
    } else {
        osal_stop_timerEx(zclTouchLinkResetter_TaskId, TL_RESETTER_START_TL_EVT);
    }
}
