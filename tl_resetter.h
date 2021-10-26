#ifndef TL_RESETTER_H
#define TL_RESETTER_H


extern void zclTouchLinkRestter_Init(uint8 task_id);
extern uint16 zclTouchLinkRestter_event_loop(uint8 task_id, uint16 events);
extern void zclTouchLinkRestter_HandleKeys(uint8 portAndAction, uint8 keyCode);
#endif