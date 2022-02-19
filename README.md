# Plant Watering Sensor EFEKTA PWS (Zigbee)
(MINI, STANDART, MAX, PRO versions)

### Plant Watering Sensor Project for Zigbee Network 
(in the beginning it was based on the Source Code of theDIYRUZ Flower Project - https://github.com/diyruz/flower)

Powered by SoC CC2530, the sensor is based on a capacitive measurement method. The sensor is powered by a CR 2032, CR2450, CR2477, ААА batteries.


#### Donate to me: https://paypal.me/efektalab or just buy to support this project

#### Sale: https://www.tindie.com/products/diyberk/mini-plant-watering-sensor-efekta-zigbee/ (Mini version)

#### Sale: https://www.tindie.com/products/diyberk/plant-watering-sensor-efekta-zigbee2mqtt/ (New standart version)

#### Sale: https://www.tindie.com/products/diyberk/plant-watering-sensor-efekta-maxzigbee/ (New max version)

#### Sale: https://www.tindie.com/products/diyberk/plant-watering-sensor-efekta-prozigbee/ (New pro version)



#### Video: https://youtu.be/DzgeWvG4MEI

#### Telegram ZigDev - https://t.me/zigdev

#### Telegram DiyDev - https://t.me/diy_devices

More info at http://efektalab.com/eON_PWS_Z

---
#### Old standart version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/001.png) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/003.jpg) 

#### New standart version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/007.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/006.jpg) 

#### Max version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/008.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/009.jpg) 

#### Pro version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/010.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/011.jpg) 

### Components:
##### (Soldering time: 10-15 minutes.)

CC2530 E18-MS1-PCB - https://ali.ski/v8RP7i (10pcs)

CC2530 E18-MS1-PCB - https://ali.ski/o_TBGP

Tantalum Capacitor 220uF - https://ali.ski/VApfn

SMD LED 0805 - https://ali.ski/wb6ZP 

1% SMD Resistor Kit Assorted Kit 1R-1M 0603 - https://ali.ski/npItF

SMD Chip Multilayer Ceramic Capacitor 0603 10pF 50V - https://ali.ski/p3yr60

SMD Chip Multilayer Ceramic Capacitor 0603 100nF 50V - https://ali.ski/p3yr60

1N4148WS - https://ali.ski/cOCdto

Cell Holder CR2450 - https://ali.ski/VdotsA

Micro Button Tact Switch SMD 4Pin 3X4X2.5 - https://ali.ski/sGwFu

IRLML6402TRPBF - https://ali.ski/_iNbX

Micro Screws M1.4 5mm - https://ali.ski/gaFdO


---

### How to flash the device

1. Download the Smart RF Flash Programmer V1 https://www.ti.com/tool/FLASH-PROGRAMMER

2. Open the application select the HEX firmware file

3. Connect the device with wires to CCDebugger, first erase the chip, then flash it.

---

### How to install IAR

https://github.com/ZigDevWiki/zigdevwiki.github.io/blob/main/docs/Begin/IAR_install.md

https://github.com/sigma7i/zigbee-wiki/wiki/zigbee-firmware-install (RU)

---

### How to add support yourself in MJD

1.  https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/majordomo-zigbee2mqtt/README.md (MJD https://mjdm.ru/)

---

### How to join:
#### If device in FN(factory new) state:
##### one way
1. Open z2m, make sure that joining is prohibited
2. Insert the battery into the device
3. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
4. Go to the LOGS tab
5. Press the reset button on the device (the join procedure will begin, еhe device starts flashing the LED repeatedly)
6. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times

##### another way
1. Open z2m, make sure that joining is prohibited
2. Insert the battery into the device
3. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
4. Go to the LOGS tab
5. Press and hold button (1) for 2-3 seconds, until device start flashing the LED repeatedly
6. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times


#### If device in a network:
##### one way 
1. Hold button (1) for 10 seconds, this will reset device to FN(factory new) status 
2. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
3. Go to the LOGS tab
5. Press and hold button (1) for 2-3 seconds, until device start flashing the LED repeatedly
6. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times

##### another way
1.Find the device in the list of z2m devices and delete it by applying force remove
2. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
3. Go to the LOGS tab
4. Press the reset button on the device (the join procedure will begin, еhe device starts flashing the LED repeatedly)
5. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times

### Troubleshooting

If a device does not connect to your coordinator, please try the following:

1. Power off all routers in your network.
2. Move the device near to your coordinator (about 1 meter).
or if you cannot disable routers (for example, internal switches), you may try the following:
2.1. Disconnect an external antenna from your coordinator.
2.2. Move a device to your coordinator closely (1-3 centimeters).
3. Power on, power on the device.
4. Restart your coordinator (for example, restart Zigbee2MQTT if you use it).

If the device has not fully passed the join

1. If the device is visible in the list of z2m devices, remove it by applying force remove
2. Restart your coordinator (for example, restart Zigbee2MQTT if you use it).
3. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
4. Go to the LOGS tab
5. Press and hold button (1) for 2-3 seconds, until device start flashing the LED repeatedly
6. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times



### Other checks

Please, ensure the following:

1. Your power source is OK (a battery has more than 3V). You can temporarily use an external power source for testings (for example, from a debugger).
2. The RF part of your E18 board works. You can upload another firmware to it and try to pair it with your coordinator. Or you may use another coordinator and build a separate Zigbee network for testing.
3. Your coordinator has free slots for direct connections.
4. You permit joining on your coordinator.
5. Your device did not join to other opened Zigbee network. When you press and hold the button, it should flash every 3-4 seconds. It means that the device in the joining state.
