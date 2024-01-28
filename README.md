# Plant Watering Sensor EFEKTA PWS (Zigbee)
(MINI, STANDART, MAX, PRO versions)
### !!! It is forbidden to manufacture devices for commercial sale, only for personal use !!!

Поблагодарить автора: https://www.donationalerts.com/r/efektalab

Thank the author: http://www.donationalerts.ru/r/EfektaLab

Телеграм чат DIY Devices - https://t.me/diy_devices

Продажа DIY Устройств - https://t.me/diydevmart

### Ordering PCB - https://www.pcbway.com/setinvite.aspx?inviteid=550959

### Plant Watering Sensor Project for Zigbee Network 
(in the beginning it was based on the Source Code of theDIYRUZ Flower Project - https://github.com/diyruz/flower)

Powered by SoC CC2530, the sensor is based on a capacitive measurement method. The sensor is powered by a CR 2032, CR2450, CR2477, ААА batteries.


### Sale: 

#### The cost of the device without the enclosure: 

##### Mini version - $15.5

##### Standart version - $15.5 

##### Max version - $20.5 +(shtc3: temperature & humidity sensor | bh1750: light sensor)

##### Pro version - $23.5 +(AAA battery| shtc3: temperature & humidity sensor | bh1750: light sensor)

##### +$3 Long range radio module (for Pro version)

##### +$7.5 Enclosure (for Mini, Standart, Max version)

##### +$9.5 Enclosure (for Pro version)

##### Delivery is $8.5, + $2 for each additional device in the order.

##### Tracknumber for tracking.

##### You can buy a ready-made device by writing to the mail hello@efektalab.com

##### Delivery is carried out worldwide.



#### Video: https://youtu.be/DzgeWvG4MEI

### You can make your own pcb here - https://www.pcbway.com/setinvite.aspx?inviteid=550959

https://hackaday.io/project/181075-efekta-pws-zigbee


---
#### Old standart version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/001.png) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/003.jpg) 

#### New standart version
(the firmware from the old version will not work correctly)

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/007.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/006.jpg) 

#### Max version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/008.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/009.jpg) 

#### Pro version

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/010.jpg) 

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/012.jpg) 

### Components:
##### (Soldering time: 10-15 minutes.)

## I recommend ordering PCB here - https://www.pcbway.com/setinvite.aspx?inviteid=550959

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
1. Find the device in the list of z2m devices and delete it by applying force remove
2. Click on the icon in z2m - allow joining (you have 180 seconds to add the device)
3. Go to the LOGS tab
4. Press the reset button on the device (the join procedure will begin, еhe device starts flashing the LED repeatedly)
5. Wait, in case of successfull join, device will flash led 5 times, if join failed, device will flash led 2 times

### How to configure:

1. Open configuration.yaml in the editor. 
2. Find the friendly_name of your device. 
3. For example to add a temperature calibration you need to add the string temperature_calibration: 5. 

All configuration parameters are described in the Options section ( https://www.zigbee2mqtt.io/devices/EFEKTA_PWS.html )

![Plant-Watering-Sensor-Zigbee2](https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/IMAGES/2000.png) 

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
