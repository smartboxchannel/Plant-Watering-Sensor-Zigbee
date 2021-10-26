#ifndef SENSEAIR_H
#define SENSEAIR_H
extern void SenseAir_RequestMeasure(void);
extern uint16 SenseAir_Read(void);
extern void SenseAir_SetABC(bool isEnabled);
#endif