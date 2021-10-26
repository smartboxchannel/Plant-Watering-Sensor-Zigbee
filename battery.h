#ifndef _BATTERY_H
#define _BATTERY_H
//This is custom attribute
#define ATTRID_POWER_CFG_BATTERY_VOLTAGE_RAW_ADC                0x0200


extern uint8 zclBattery_Voltage;
extern uint8 zclBattery_PercentageRemainig;
extern uint16 zclBattery_RawAdc;


extern uint16 getBatteryVoltage(void);
extern uint8 getBatteryVoltageZCL(uint16 millivolts);
extern uint8 getBatteryRemainingPercentageZCL(uint16 millivolts);
extern uint8 getBatteryRemainingPercentageZCLCR2032(uint16 volt16);

extern void zclBattery_Init(uint8 task_id);
extern uint16 zclBattery_event_loop(uint8 task_id, uint16 events);
extern void zclBattery_HandleKeys(uint8 portAndAction, uint8 keyCode);
extern void zclBattery_Report(void);
#endif