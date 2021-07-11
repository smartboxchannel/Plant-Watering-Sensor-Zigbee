#include "senseair.h"
#include "Debug.h"
#include "OSAL.h"
#include "OnBoard.h"
#include "hal_uart.h"
#include "hal_led.h"

#ifndef CO2_UART_PORT
    #define CO2_UART_PORT HAL_UART_PORT_1
#endif

#define SENSEAIR_RESPONSE_LENGTH 13

uint8 readCO2[] =    {0xFE, 0x04, 0x00, 0x00, 0x00, 0x04, 0xE5, 0xC6};
uint8 disableABC[] = {0xFE, 0x06, 0x00, 0x1F, 0x00, 0x00, 0xAC, 0x03};
uint8 enableABC[] =  {0xFE, 0x60, 0x00, 0x1F, 0x00, 0xB4, 0xAC, 0x74};

void SenseAir_SetABC(bool isEnabled) {
    if (isEnabled) {
        HalUARTWrite(CO2_UART_PORT, enableABC, sizeof(enableABC) / sizeof(enableABC[0]));
    } else {
        HalUARTWrite(CO2_UART_PORT, disableABC, sizeof(disableABC) / sizeof(disableABC[0]));
    }
}

void SenseAir_RequestMeasure(void) {
    HalUARTWrite(CO2_UART_PORT, readCO2, sizeof(readCO2) / sizeof(readCO2[0]));
}
uint16 SenseAir_Read(void) {

    uint8 response[SENSEAIR_RESPONSE_LENGTH];
    HalUARTRead(CO2_UART_PORT, (uint8 *)&response, sizeof(response) / sizeof(response[0]));

    if (response[0] != 0xFE || response[1] != 0x04) {
        LREPMaster("Invalid response\r\n");
        HalLedSet(HAL_LED_ALL, HAL_LED_MODE_FLASH);
        return 0;
    }

    const uint8 length = response[2];
    const uint16 status = (((uint16)response[3]) << 8) | response[4];
    const uint16 ppm = (((uint16)response[length + 1]) << 8) | response[length + 2];

    LREP("SenseAir Received CO₂=%d ppm Status=0x%X\r\n", ppm, status);

    return ppm;
}