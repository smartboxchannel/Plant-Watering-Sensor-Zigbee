
#include "AF.h"
#include "OSAL.h"
#include "OSAL_Clock.h"
#include "OSAL_PwrMgr.h"
#include "ZComDef.h"
#include "ZDApp.h"
#include "ZDNwkMgr.h"
#include "ZDObject.h"
#include "math.h"

#include "nwk_util.h"
#include "zcl.h"
#include "zcl_app.h"
#include "zcl_diagnostic.h"
#include "zcl_general.h"
//#include "zcl_lighting.h"
#include "zcl_ms.h"

#include "bdb.h"
#include "bdb_interface.h"
#include "gp_interface.h"

#include "Debug.h"

#include "OnBoard.h"

#include <stdio.h>
#include <stdlib.h>

/* HAL */
#include "inttempsens.h"
#include "hal_adc.h"
#include "hal_drivers.h"
#include "hal_key.h"
#include "hal_led.h"

#include "battery.h"
#include "commissioning.h"
#include "factory_reset.h"
#include "utils.h"
#include "version.h"

/*********************************************************************
 * MACROS
 */
#define HAL_KEY_CODE_RELEASE_KEY HAL_KEY_CODE_NOKEY

// use led4 as output pin, osal will shitch it low when go to PM
#define START_PWS()                                                                                                                 \
    do {                                                                                                                                   \
        st(T3CTL |= BV(4););                                                                                                               \
    } while (0)
#define STOP_PWS()                                                                                                                \
    do {                                                                                                                                   \
        st(T3CTL &= ~BV(4); T3CTL |= BV(2););                                                                                              \
    } while (0)

/*********************************************************************
 * CONSTANTS
 */

/*********************************************************************
 * TYPEDEFS
 */

/*********************************************************************
 * GLOBAL VARIABLES
 */

extern bool requestNewTrustCenterLinkKey;
byte zclApp_TaskID;

/*********************************************************************
 * GLOBAL FUNCTIONS
 */

/*********************************************************************
 * LOCAL VARIABLES
 */

static uint8 currentSensorsReadingPhase = 0;
int16 temp_old = 0;
int16 tempTr = 1;
int16 startWork = 0;
int16 sendBattCount = 0;
bool pushBut = false;
/*********************************************************************
 * LOCAL FUNCTIONS
 */
static void zclApp_HandleKeys(byte shift, byte keys);
static void zclApp_Report(void);

static void zclApp_ReadSensors(void);
#ifndef PWS_MINI 
static void zclApp_IntTempSens(void);
#endif
static void zclApp_ReadSoilHumidity(void);
static void zclApp_InitPWM(void);

/*********************************************************************
 * ZCL General Profile Callback table
 */
static zclGeneral_AppCallbacks_t zclApp_CmdCallbacks = {
    NULL, // Basic Cluster Reset command
    NULL, // Identify Trigger Effect command
    NULL, // On/Off cluster commands
    NULL, // On/Off cluster enhanced command Off with Effect
    NULL, // On/Off cluster enhanced command On with Recall Global Scene
    NULL, // On/Off cluster enhanced command On with Timed Off
    NULL, // RSSI Location command
    NULL  // RSSI Location Response command
};

void zclApp_Init(byte task_id) {
    IO_IMODE_PORT_PIN(SOIL_MOISTURE_PORT, SOIL_MOISTURE_PIN, IO_TRI); // tri state p0.4 (soil humidity pin)
    STOP_PWS();

    zclApp_InitPWM();
    // this is important to allow connects throught routers
    // to make this work, coordinator should be compiled with this flag #define TP2_LEGACY_ZC
    requestNewTrustCenterLinkKey = FALSE;

    zclApp_TaskID = task_id;

    zclGeneral_RegisterCmdCallbacks(1, &zclApp_CmdCallbacks);
    zcl_registerAttrList(zclApp_FirstEP.EndPoint, zclApp_AttrsFirstEPCount, zclApp_AttrsFirstEP);
    bdb_RegisterSimpleDescriptor(&zclApp_FirstEP);

    zcl_registerForMsg(zclApp_TaskID);

    // Register for all key events - This app will handle all key events
    RegisterForKeys(zclApp_TaskID);
    LREP("Started build %s \r\n", zclApp_DateCodeNT);

    osal_start_reload_timer(zclApp_TaskID, APP_REPORT_EVT, APP_REPORT_DELAY);
}

uint16 zclApp_event_loop(uint8 task_id, uint16 events) {
    afIncomingMSGPacket_t *MSGpkt;

    (void)task_id; // Intentionally unreferenced parameter
    if (events & SYS_EVENT_MSG) {
        while ((MSGpkt = (afIncomingMSGPacket_t *)osal_msg_receive(zclApp_TaskID))) {
            switch (MSGpkt->hdr.event) {
            case KEY_CHANGE:
                zclApp_HandleKeys(((keyChange_t *)MSGpkt)->state, ((keyChange_t *)MSGpkt)->keys);
                break;
            case ZCL_INCOMING_MSG:
                if (((zclIncomingMsg_t *)MSGpkt)->attrCmd) {
                    osal_mem_free(((zclIncomingMsg_t *)MSGpkt)->attrCmd);
                }
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

    if (events & APP_REPORT_EVT) {
        LREPMaster("APP_REPORT_EVT\r\n");
        zclApp_Report();
        return (events ^ APP_REPORT_EVT);
    }

    if (events & APP_READ_SENSORS_EVT) {
        LREPMaster("APP_READ_SENSORS_EVT\r\n");
        zclApp_ReadSensors();
        pushBut = true;
        return (events ^ APP_READ_SENSORS_EVT);
    }

    // Discard unknown events
    return 0; 
}

static void zclApp_HandleKeys(byte portAndAction, byte keyCode) {
    LREP("zclApp_HandleKeys portAndAction=0x%X keyCode=0x%X\r\n", portAndAction, keyCode);
    zclFactoryResetter_HandleKeys(portAndAction, keyCode);
    zclCommissioning_HandleKeys(portAndAction, keyCode);
    if (portAndAction & HAL_KEY_RELEASE) {
        LREPMaster("Key press\r\n");
        osal_start_timerEx(zclApp_TaskID, APP_REPORT_EVT, 500);
    }
}
static void zclApp_InitPWM(void) {
    PERCFG &= ~(0x20); // Select Timer 3 Alternative 1 location
    P2SEL |= 0x20;
    P2DIR |= 0xC0;  // Give priority to Timer 1 channel2-3
    P1SEL |= BV(4); // Set P1_4 to peripheral, Timer 1,channel 2
    P1DIR |= BV(4);

    T3CTL &= ~BV(4); // Stop timer 3 (if it was running)
    T3CTL |= BV(2);  // Clear timer 3
    T3CTL &= ~0x08;  // Disable Timer 3 overflow interrupts
    T3CTL |= 0x03;   // Timer 3 mode = 3 - Up/Down

    T3CCTL1 &= ~0x40; // Disable channel 0 interrupts
    T3CCTL1 |= BV(2); // Ch0 mode = compare
    T3CCTL1 |= BV(4); // Ch0 output compare mode = toggle on compare

    T3CTL &= ~(BV(7) | BV(6) | BV(5)); // Clear Prescaler divider value
    T3CC0 = 4;                         // Set ticks
}

static void zclApp_ReadSensors(void) {
    LREP("currentSensorsReadingPhase %d\r\n", currentSensorsReadingPhase);
    /**
     * FYI: split reading sensors into phases, so single call wouldn't block processor
     * for extensive ammount of time
     * */
    HalLedSet(HAL_LED_1, HAL_LED_MODE_BLINK);
    switch (currentSensorsReadingPhase++) {
    case 0:
        START_PWS();
        break;
        
    case 1:
      if(startWork <= 5){
        startWork++;
        zclBattery_Report();
        pushBut = true;
      }
      
      if(startWork == 6){
      sendBattCount++;
      if(sendBattCount == 3){
        zclBattery_Report();
        sendBattCount = 0;
        pushBut = true;
      }else{
        if(pushBut){
          zclBattery_Report();
          sendBattCount = 0;
        }
      }
      }
      zclApp_ReadSoilHumidity();
      break;
       
    case 2:
        STOP_PWS();
#ifndef PWS_MINI        
        zclApp_IntTempSens();
#endif
        if(pushBut == true){
        pushBut = false;
        }
        break; 
    default:
        currentSensorsReadingPhase = 0;
        break;
    }
    if (currentSensorsReadingPhase != 0) {
        osal_start_timerEx(zclApp_TaskID, APP_READ_SENSORS_EVT, 10);
    }
}


static void zclApp_ReadSoilHumidity(void) {
    zclApp_SoilHumiditySensor_MeasuredValueRawAdc = adcReadSampled(SOIL_MOISTURE_PIN, HAL_ADC_RESOLUTION_14, HAL_ADC_REF_AVDD, 5);
    // FYI: https://docs.google.com/spreadsheets/d/1qrFdMTo0ZrqtlGUoafeB3hplhU3GzDnVWuUK4M9OgNo/edit?usp=sharing
    uint16 soilHumidityMinRangeAir = (uint16)AIR_COMPENSATION_FORMULA(zclBattery_RawAdc);
    uint16 soilHumidityMaxRangeWater = (uint16)WATER_COMPENSATION_FORMULA(zclBattery_RawAdc);
    LREP("soilHumidityMinRangeAir=%d soilHumidityMaxRangeWater=%d\r\n", soilHumidityMinRangeAir, soilHumidityMaxRangeWater);
    zclApp_SoilHumiditySensor_MeasuredValue =
        (uint16)mapRange(soilHumidityMinRangeAir, soilHumidityMaxRangeWater, 0.0, 10000.0, zclApp_SoilHumiditySensor_MeasuredValueRawAdc);
    LREP("ReadSoilHumidity raw=%d mapped=%d\r\n", zclApp_SoilHumiditySensor_MeasuredValueRawAdc, zclApp_SoilHumiditySensor_MeasuredValue);
    
    if(!pushBut){
    if (abs(zclApp_SoilHumiditySensor_MeasuredValue - zclApp_SoilHumiditySensor_MeasuredValue_old) >= zclApp_SoilHumiditySensor_MeasuredValueTr *100) {
      zclApp_SoilHumiditySensor_MeasuredValue_old = zclApp_SoilHumiditySensor_MeasuredValue;
      bdb_RepChangedAttrValue(zclApp_FirstEP.EndPoint, SOIL_HUMIDITY, ATTRID_MS_RELATIVE_HUMIDITY_MEASURED_VALUE);
    }
    }else{
      zclApp_SoilHumiditySensor_MeasuredValue_old = zclApp_SoilHumiditySensor_MeasuredValue;
      bdb_RepChangedAttrValue(zclApp_FirstEP.EndPoint, SOIL_HUMIDITY, ATTRID_MS_RELATIVE_HUMIDITY_MEASURED_VALUE);
    }
}

#ifndef PWS_MINI 
static void zclApp_IntTempSens(void) {
    int16 temp = readTemperature();
    temp = temp/100;
    temp = temp*100;
    if(!pushBut){
    if (abs(temp - temp_old) >= tempTr * 100) {
      temp_old = temp;
        zclApp_Temperature_Sensor_MeasuredValue = temp;
        LREP("ReadIntTempSens t=%d\r\n", zclApp_Temperature_Sensor_MeasuredValue);
        bdb_RepChangedAttrValue(zclApp_FirstEP.EndPoint, TEMP, ATTRID_MS_TEMPERATURE_MEASURED_VALUE);
    }
    }else{
      temp_old = temp;
      zclApp_Temperature_Sensor_MeasuredValue = temp;
      LREP("ReadIntTempSens t=%d\r\n", zclApp_Temperature_Sensor_MeasuredValue);
      bdb_RepChangedAttrValue(zclApp_FirstEP.EndPoint, TEMP, ATTRID_MS_TEMPERATURE_MEASURED_VALUE);
    }
}
#endif

static void _delay_us(uint16 microSecs) {
    while (microSecs--) {
        asm("NOP");
        asm("NOP");
        asm("NOP");
        asm("NOP");
        asm("NOP");
        asm("NOP");
        asm("NOP");
        asm("NOP");
    }
}



void user_delay_ms(uint32_t period) { _delay_us(1000 * period); }

static void zclApp_Report(void) { osal_start_timerEx(zclApp_TaskID, APP_READ_SENSORS_EVT, 10); }


/****************************************************************************
****************************************************************************/
