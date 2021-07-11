# Plant-Watering-Sensor-Zigbee

### Plant Watering Sensor Project for Zigbee Network (based on the Source Code of the DIYRUZ Flower Project - https://github.com/diyruz/flower)

Powered by SoC CC2530, the sensor is based on a capacitive measurement method. The sensor is powered by a CR 2450 battery (CR 2477).

---

### How to flash the device yourself

---

### How to install IAR

https://github.com/ZigDevWiki/zigdevwiki.github.io/blob/main/docs/Begin/IAR_install.md

---

### How to add support yourself

1.  https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/Z2M%20CONVERTER/README.md
2.  https://github.com/smartboxchannel/Plant-Watering-Sensor-Zigbee/blob/main/majordomo-zigbee2mqtt/README.md (MJD https://mjdm.ru/)

---

### How to join:
#### If device in FN(factory new) state:
Press and hold button (1) for 2-3 seconds, until device start flashing led
Wait, in case of successfull join, device will flash led 5 times
If join failed, device will flash led 3 times

#### If device in a network:
Hold button (1) for 10 seconds, this will reset device to FN(factory new) status
Go to step 1 for FN device

#### Troubleshooting
If a device does not connect to your coordinator, please try the following:

Power off all routers in your network.
Move the device near to your coordinator (about 1 meter).
or if you cannot disable routers (for example, internal switches), you may try the following:

Disconnect an external antenna from your coordinator.
Move a device to your coordinator closely (<1meter).
Power on, power on the device.
Restart your coordinator (for example, restart Zigbee2MQTT if you use it).

#### Other checks
Please, ensure the following:

Your power source is OK (a battery has more than 3V). You can temporarily use an external power source for testings (for example, from a debugger).
The RF part of your E18 board works. You can upload another firmware to it and try to pair it with your coordinator. Or you may use another coordinator and build a separate Zigbee network for testing.
Your coordinator has free slots for direct connections.
You permit joining on your coordinator.
Your device did not join to other opened Zigbee network. When you press and hold the button, it should flash every 3-4 seconds. It means that the device in the joining state.
