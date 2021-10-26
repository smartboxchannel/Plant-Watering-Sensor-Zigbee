#include "inttempsens.h"

#define HAL_ADC_EOC 0x80 // End of Conversion bit
#define HAL_ADC_START 0x40 // Starts Conversion
#define HAL_ADC_RESOLUTION_8 0x01
#define HAL_ADC_RESOLUTION_10 0x02
#define HAL_ADC_RESOLUTION_12 0x03
#define HAL_ADC_RESOLUTION_14 0x04
#define HAL_ADC_CHN_VDD3 0x0f    // VDD/3
#define HAL_ADC_REF_125V 0x00    // Internal Reference (1.15V for CC2530)

#define HAL_ADC_REF_115V 0x00 
#define HAL_ADC_DEC_256 0x20 
#define HAL_ADC_CHN_TEMP    0x0e    /* Temperature sensor */

#define HAL_ADC_DEC_064     0x00    /* Decimate by 64 : 8-bit resolution */
#define HAL_ADC_DEC_128     0x10    /* Decimate by 128 : 10-bit resolution */
#define HAL_ADC_DEC_256     0x20    /* Decimate by 256 : 12-bit resolution */
#define HAL_ADC_DEC_512     0x30    /* Decimate by 512 : 14-bit resolution */



/*
#include "OnBoard.h"

#define DS18B20_SKIP_ROM 0xCC
#define DS18B20_CONVERT_T 0x44
#define DS18B20_READ_SCRATCHPAD 0xBE
#define DS18B20_WRITE_SCRATCHPAD 0x4E

// Device resolution
#define DS18B20_TEMP_9_BIT 0x1F  //  9 bit
#define DS18B20_TEMP_10_BIT 0x3F // 10 bit
#define DS18B20_TEMP_11_BIT 0x5F // 11 bit
#define DS18B20_TEMP_12_BIT 0x7F // 12 bit

#ifndef DS18B20_RESOLUTION
#define DS18B20_RESOLUTION DS18B20_TEMP_10_BIT
#endif

#ifndef DS18B20_RETRY_COUNT
#define DS18B20_RETRY_COUNT 10
#endif

#define MAX_CONVERSION_TIME (750 * 1.2) // ms 750ms + some overhead

#define DS18B20_RETRY_DELAY ((uint16) (MAX_CONVERSION_TIME / DS18B20_RETRY_COUNT))

static void _delay_us(uint16);
static void _delay_ms(uint16);
static void ds18b20_send(uint8);
static uint8 ds18b20_read(void);
static void ds18b20_send_byte(int8);
static uint8 ds18b20_read_byte(void);
static uint8 ds18b20_Reset(void);
static void ds18b20_GroudPins(void);
static void ds18b20_setResolution(uint8 resolution);
static int16 ds18b20_convertTemperature(uint8 temp1, uint8 temp2, uint8 resolution);

static void _delay_us(uint16 microSecs) {
    MicroWait(microSecs);
}

static void _delay_ms(uint16 milliSecs) {
    while (milliSecs--) {
        _delay_us(1000);
    }
}

// Sends one bit to bus
static void ds18b20_send(uint8 bit) {
    TSENS_SBIT = 1;
    TSENS_DIR |= TSENS_BV; // output
    TSENS_SBIT = 0;
    if (bit != 0)
        _delay_us(8);
    else
        _delay_us(80);
    TSENS_SBIT = 1;
    if (bit != 0)
        _delay_us(80);
    else
        _delay_us(2);
    // TSENS_SBIT = 1;
}

// Reads one bit from bus
static uint8 ds18b20_read(void) {
    TSENS_SBIT = 1;
    TSENS_DIR |= TSENS_BV; // output
    TSENS_SBIT = 0;
    _delay_us(2);
    // TSENS_SBIT = 1;
    //_delay_us(15);
    TSENS_DIR &= ~TSENS_BV; // input
    _delay_us(5);
    uint8 i = TSENS_SBIT;
    _delay_us(60);
    return i;
}

// Sends one byte to bus
static void ds18b20_send_byte(int8 data) {
    uint8 i, x;
    for (i = 0; i < 8; i++) {
        x = data >> i;
        x &= 0x01;
        ds18b20_send(x);
    }
    //_delay_us(100);
}

// Reads one byte from bus
static uint8 ds18b20_read_byte(void) {
    uint8 i;
    uint8 data = 0;
    for (i = 0; i < 8; i++) {
        if (ds18b20_read())
            data |= 0x01 << i;
        //_delay_us(25);
    }
    return (data);
}

// Sends reset pulse
static uint8 ds18b20_Reset(void) {
    TSENS_SBIT = 0;
    TSENS_DIR |= TSENS_BV; // output
    _delay_us(600);
    TSENS_DIR &= ~TSENS_BV; // input
    _delay_us(70);
    uint8 i = TSENS_SBIT;
    _delay_us(200);
    TSENS_SBIT = 1;
    TSENS_DIR |= TSENS_BV; // output
    _delay_us(600);
    return i;
}

static void ds18b20_GroudPins(void) {
    // TSENS_SBIT = 0;
    TSENS_DIR &= ~TSENS_BV; // input
}

static void ds18b20_setResolution(uint8 resolution) {
    ds18b20_Reset();
    ds18b20_send_byte(DS18B20_SKIP_ROM);
    ds18b20_send_byte(DS18B20_WRITE_SCRATCHPAD);
    // two dummy values for LOW & HIGH ALARM
    ds18b20_send_byte(0);
    ds18b20_send_byte(100);
    ds18b20_send_byte(resolution);
    ds18b20_Reset();
}
static int16 ds18b20_convertTemperature(uint8 temp1, uint8 temp2, uint8 resolution) {
    float temperature = 0;
    uint8 ignoreMask = 0;
    switch (resolution) {
    case DS18B20_TEMP_9_BIT:
        ignoreMask = (BV(0) | BV(1) | BV(2));
        break;

    case DS18B20_TEMP_10_BIT:
        ignoreMask = (BV(0) | BV(1));
        break;

    case DS18B20_TEMP_11_BIT:
        ignoreMask = (BV(0));
        break;

    case DS18B20_TEMP_12_BIT:
        ignoreMask = 0;
        break;

    default:
        break;
    }
    temperature = (uint16)temp1 | (uint16)(ignoreMask ? temp2 & ignoreMask : temp2) << 8;
    // neg. temp
    if (temp2 & (BV(3))) {
        temperature = temperature / 16.0 - 128.0;
    }
    // pos. temp
    else {
        temperature = temperature / 16.0;
    }
    return (int16)(temperature * 100);
}
*/
int16 readTemperature(void) {
  
  /*

    uint8 temp1, temp2, retry_count = DS18B20_RETRY_COUNT;
    ds18b20_setResolution(DS18B20_RESOLUTION);
    ds18b20_Reset();

    ds18b20_send_byte(DS18B20_SKIP_ROM);
    ds18b20_send_byte(DS18B20_CONVERT_T);

    while (retry_count) {
        _delay_ms(DS18B20_RETRY_DELAY);
        ds18b20_Reset();
        ds18b20_send_byte(DS18B20_SKIP_ROM);
        ds18b20_send_byte(DS18B20_READ_SCRATCHPAD);
        temp1 = ds18b20_read_byte();
        temp2 = ds18b20_read_byte();
        ds18b20_Reset();

        if (temp1 == 0xff && temp2 == 0xff) {
            // No sensor found.
            ds18b20_GroudPins();
            return 1;
        }
        if (temp1 == 0x50 && temp2 == 0x05) {
            // Power-up State, not ready yet
            retry_count--;
            continue;
        }

        ds18b20_GroudPins();
        return ds18b20_convertTemperature(temp1, temp2, DS18B20_RESOLUTION);
    }

    ds18b20_GroudPins();
    return 1;
*/
  
  float temperature;
  uint16 value;
 
  ATEST = 0x01;
  TR0  |= 0x01;
  ADCIF = 0;
  
 
  //ADCCON3 = (HAL_ADC_REF_125V | HAL_ADC_DEC_256 | HAL_ADC_CHN_TEMP);
ADCCON3 = 0x3E; // temp
  while(!ADCIF);
  ADCIF=0;
  value=ADCL;
  value|=((uint16) ADCH)<<8;
  value >>=4;

 
 
  //temperature = ((((float)value) * 1150.0 / 2047.0 - 743.0) / 2.45);
temperature = (((float)value)-1367.5)/4.5+6.5;
 
  return (int16)(temperature * 100);
  
  /*
  static uint16 reference_voltage;
  static uint8 bCalibrate=TRUE;
  uint16 value;
  uint16 temperature;
  ATEST=0x01;     //???????
  TR0|=0x01;      //???????
  ADCIF=0;
  ADCCON3=(HAL_ADC_REF_125V|HAL_ADC_DEC_256|HAL_ADC_CHN_TEMP);
  while(!ADCIF);
  ADCIF=0;
  value=ADCL;
  value|=((uint16) ADCH)<<8;
  value >>=4;
  if(bCalibrate)                           //???????????,????????
  {
    reference_voltage=value;
    bCalibrate=FALSE;
  }
  temperature=22+((value-reference_voltage)/4+1);   //??????
  return (int16)(temperature * 100);
*/
}