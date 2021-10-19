#include "inttempsens.h"

#include "hal_adc.h"


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



int16 readTemperature(void) {
  
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

  temperature = (((float)value)-1367.5)/4.5+6.5;
 
  return (int16)(temperature * 100);
}


