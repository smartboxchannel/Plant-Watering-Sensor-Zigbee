#define TC_LINKKEY_JOIN
#define NV_INIT
#define NV_RESTORE


#define TP2_LEGACY_ZC
//patch sdk
// #define ZDSECMGR_TC_ATTEMPT_DEFAULT_KEY TRUE

#define NWK_AUTO_POLL
#define MULTICAST_ENABLED FALSE

#define ZCL_READ
#define ZCL_BASIC
#define ZCL_IDENTIFY
#define ZCL_REPORTING_DEVICE

#define ZSTACK_DEVICE_BUILD (DEVICE_BUILD_ENDDEVICE)

#define DISABLE_GREENPOWER_BASIC_PROXY
#define BDB_FINDING_BINDING_CAPABILITY_ENABLED 1
#define BDB_REPORTING TRUE


#define ISR_KEYINTERRUPT
#define HAL_BUZZER FALSE

#define HAL_LED TRUE
//#define HAL_I2C TRUE
#define BLINK_LEDS TRUE




#if !defined HAL_BOARD_PWS
#error "Board type must be defined"
#endif

#define BDB_MAX_CLUSTERENDPOINTS_REPORTING 10

#define SOIL_MOISTURE_PORT 0
#define SOIL_MOISTURE_PIN 4

#define POWER_SAVING
// #define DO_DEBUG_UART


//#define ZHA_COMPOTABLE
#define PWS_MINI
//#define REPORT_0_5HOUR
#define REPORT_1HOUR
//#define REPORT_1_5HOURS
//#define REPORT_2HOURS
//#define REPORT_3HOURS



#ifdef PWS_MINI
#define APP_TX_POWER TX_PWR_PLUS_3
#endif

#ifdef DO_DEBUG_UART
#define HAL_UART TRUE
#define HAL_UART_DMA 1
#define INT_HEAP_LEN (2685 - 0x4B - 0xBB)
#endif

#ifdef DO_DEBUG_MT
#define HAL_UART TRUE
#define HAL_UART_DMA 1
#define HAL_UART_ISR 2
#define INT_HEAP_LEN (2688-0xC4-0x15-0x44-0x20-0x1E)

#define MT_TASK

#define MT_UTIL_FUNC
#define MT_UART_DEFAULT_BAUDRATE HAL_UART_BR_115200
#define MT_UART_DEFAULT_OVERFLOW FALSE

#define ZTOOL_P1

#define MT_APP_FUNC
#define MT_APP_CNF_FUNC
#define MT_SYS_FUNC
#define MT_ZDO_FUNC
#define MT_ZDO_MGMT
#define MT_DEBUG_FUNC

#endif

#define HAL_KEY_P2_INPUT_PINS BV(0)

#include "hal_board_cfg.h"

#include "stdint.h"
#include "stddef.h"
