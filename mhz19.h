#ifndef mhz19_h
#define mhz19_h
extern void MHZ19_RequestMeasure(void);
extern uint16 MHZ19_Read(void);
extern void MHZ19_SetABC(bool isEnabled);
extern void MHZ19_SetRange5000PPM(void);
#endif