#include "Debug.h"
#include "DebugTrace.h"
#include "MT.h"
#include "OSAL.h"
#include "OSAL_Memory.h"


void vprint(const char *fmt, va_list argp) {
    uint8 string[100];
    if (0 < vsprintf((char *)string, fmt, argp)) // build string
    {
        LREPMaster(string);
    }
}

#ifdef DO_DEBUG_UART
#define UART_PORT HAL_UART_PORT_0
bool DebugInit() {
    halUARTCfg_t halUARTConfig;
    halUARTConfig.configured = TRUE;
    halUARTConfig.baudRate = HAL_UART_BR_115200;
    halUARTConfig.flowControl = FALSE;
    halUARTConfig.flowControlThreshold = 48; // this parameter indicates number of bytes left before Rx Buffer
                                             // reaches maxRxBufSize
    halUARTConfig.idleTimeout = 10;          // this parameter indicates rx timeout period in millisecond
    halUARTConfig.rx.maxBufSize = 0;
    halUARTConfig.tx.maxBufSize = BUFFLEN;
    halUARTConfig.intEnable = TRUE;
    halUARTConfig.callBackFunc = NULL;
    HalUARTInit();
    if (HalUARTOpen(UART_PORT, &halUARTConfig) == HAL_UART_SUCCESS) {
        LREPMaster("Initialized debug module \r\n");
        return true;
    }
    return false;
}

void LREPMaster(uint8 *data) {
    if (data == NULL) {
        return;
    }
    HalUARTWrite(UART_PORT, data, osal_strlen((char *)data));
}

void LREP(char *format, ...) {
    va_list argp;
    va_start(argp, format);
    vprint(format, argp);
    va_end(argp);
}
#elif defined(DO_DEBUG_MT)

bool DebugInit() {
    debugThreshold = 0x04; // increase threshold as soon as we initialize debug module
    LREPMaster("Initialized debug module \r\n");
    return TRUE;
}
void LREP(char *format, ...) {

    va_list argp;
    va_start(argp, format);
    vprint(format, argp);
    va_end(argp);
}
void LREPMaster(uint8 *data) { debug_str(data); }
#else
bool DebugInit() {return true;};
void LREP(char *format, ...) {
    va_list argp;
    va_start(argp, format);
    printf(format, argp);
    va_end(argp);
};
void LREPMaster(uint8 *data) {
    printf((const char*)data);
};
#endif
