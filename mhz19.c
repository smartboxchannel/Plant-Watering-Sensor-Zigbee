#include "mhz19.h"
#include "Debug.h"
#include "OSAL.h"
#include "OnBoard.h"
#include "hal_led.h"
#include "hal_uart.h"

#ifndef CO2_UART_PORT
#define CO2_UART_PORT HAL_UART_PORT_1
#endif

#define MHZ18_RESPONSE_LENGTH 13

uint8 MHZ19_RESPONSE_LENGTH = 9;
uint8 MHZ19_COMMAND_GET_PPM[] = {0xFF, 0x01, 0x86, 0x00, 0x00, 0x00, 0x00, 0x00, 0x79};
uint8 MHZ19_COMMAND_ABC_ENABLE[] = {0xFF, 0x01, 0x79, 0xA0, 0x00, 0x00, 0x00, 0x00, 0xE6};
uint8 MHZ19_COMMAND_ABC_DISABLE[] = {0xFF, 0x01, 0x79, 0x00, 0x00, 0x00, 0x00, 0x00, 0x86};
static uint8 MHZ19_COMMAND_SET_RANGE_5000PPM[] = {0xFF, 0x01, 0x99, 0x00, 0x00, 0x00, 0x13, 0x88, 0xCB};

static void flushUART(void);

static void flushUART(void) {
    uint8 response;
    while (Hal_UART_RxBufLen(CO2_UART_PORT) > 0) {
        HalUARTRead(CO2_UART_PORT, (uint8 *)&response, 1);
    }
}
void MHZ19_SetRange5000PPM(void) {
    flushUART();
    HalUARTWrite(CO2_UART_PORT, MHZ19_COMMAND_SET_RANGE_5000PPM, sizeof(MHZ19_COMMAND_SET_RANGE_5000PPM) / sizeof(MHZ19_COMMAND_SET_RANGE_5000PPM[0]));
}

void MHZ19_SetABC(bool isEnabled) {
    flushUART();
    if (isEnabled) {
        HalUARTWrite(CO2_UART_PORT, MHZ19_COMMAND_ABC_ENABLE, sizeof(MHZ19_COMMAND_ABC_ENABLE) / sizeof(MHZ19_COMMAND_ABC_ENABLE[0]));
    } else {
        HalUARTWrite(CO2_UART_PORT, MHZ19_COMMAND_ABC_DISABLE, sizeof(MHZ19_COMMAND_ABC_DISABLE) / sizeof(MHZ19_COMMAND_ABC_DISABLE[0]));
    }
}

void MHZ19_RequestMeasure(void) {
    flushUART();
    HalUARTWrite(CO2_UART_PORT, MHZ19_COMMAND_GET_PPM, sizeof(MHZ19_COMMAND_GET_PPM) / sizeof(MHZ19_COMMAND_GET_PPM[0]));
}
uint16 MHZ19_Read(void) {

    uint8 response[MHZ18_RESPONSE_LENGTH];
    HalUARTRead(CO2_UART_PORT, (uint8 *)&response, sizeof(response) / sizeof(response[0]));

    if (response[0] != 0xFF || response[1] != 0x86) {
        LREPMaster("MHZ18 Invalid response\r\n");
        HalLedSet(HAL_LED_ALL, HAL_LED_MODE_FLASH);
        return 0;
    }

    const uint16 ppm = (((uint16)response[2]) << 8) | response[3];
    const int temp = ((int)response[4]) - 40;
    const uint8 status = response[5];

    LREP("MHZ18 Received CO₂=%d ppm Status=0x%X temp=%d\r\n", ppm, status, temp);

    return ppm;
}