#ifndef commissioning_h
#define commissioning_h

#define APP_COMMISSIONING_CLOCK_DOWN_POLING_RATE_EVT  0x0001
#define APP_COMMISSIONING_END_DEVICE_REJOIN_EVT       0x0002

#define APP_COMMISSIONING_END_DEVICE_REJOIN_MAX_DELAY ((uint32)1800000) // 30 minutes 30 * 60 * 1000
#define APP_COMMISSIONING_END_DEVICE_REJOIN_START_DELAY 10 * 1000 // 10 seconds
#define APP_COMMISSIONING_END_DEVICE_REJOIN_BACKOFF ((float) 1.2)
#define APP_COMMISSIONING_END_DEVICE_REJOIN_TRIES 20




extern void zclCommissioning_Init(uint8 task_id);
extern uint16 zclCommissioning_event_loop(uint8 task_id, uint16 events);
extern void zclCommissioning_Sleep( uint8 allow );
extern void zclCommissioning_HandleKeys(uint8 portAndAction, uint8 keyCode);

#endif