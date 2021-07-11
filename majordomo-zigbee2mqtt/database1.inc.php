<?php

//https://github.com/Koenkk/zigbee-shepherd-converters/blob/master/devices.js
$par1=SQLSelectOne ("select * from zigbee2mqtt_devices_list where ID=1");

if (!$par1['ID']) {

$par1['zigbeeModel'] = 'lumi.light.aqcn02';
$par1['model'] = "ZNLDP12LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "bulb";		 
$par1['description'] = "Aqara smart LED bulb";		 
$par1['extend'] = "generic.light_onoff_brightness_colortemp";		 
$par1['supports'] = "";		 
$par1['fromZigbee'] = "fz.light_brightness, fz.light_color_colortemp, fz.generic_state, fz.xiaomi_bulb_interval, fz.ignore_light_brightness_report, fz.ignore_light_color_colortemp_report, fz.ignore_onoff_change,            fz.ignore_basic_change";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.sensor_switch';
$par1['model'] = "WXKG01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "MiJia wireless switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "single, double, triple, quadruple, many, long, long_release click";		 
$par1['fromZigbee'] = "fz.xiaomi_battery_3v, fz.WXKG01LM_click, fz.ignore_onoff_change, fz.ignore_basic_change";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						






$par1['zigbeeModel'] = 'lumi.sensor_switch.aq2';
$par1['model'] = "WXKG11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara wireless switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "single, double click (and triple, quadruple, hold, release depending on model)";		 
$par1['fromZigbee'] = " fz.xiaomi_battery_3v, fz.WXKG11LM_click, fz.ignore_onoff_change, fz.ignore_basic_change,            fz.xiaomi_action_click_multistate, fz.ignore_multistate_change,";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.remote.b1acn01\u0000\u0000\u0000\u0000\u0000\u0000';
$par1['model'] = "WXKG11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara wireless switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "single, double click (and triple, quadruple, hold, release depending on model)";		 
$par1['fromZigbee'] = " fz.xiaomi_battery_3v, fz.WXKG11LM_click, fz.ignore_onoff_change, fz.ignore_basic_change,            fz.xiaomi_action_click_multistate, fz.ignore_multistate_change,";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'lumi.sensor_switch.aq3';
$par1['model'] = "WXKG12LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara wireless switch (with gyroscope)";		 
$par1['extend'] = "";		 
$par1['supports'] = "single, double, shake, hold, release";		 
$par1['fromZigbee'] = "fz.xiaomi_battery_3v, fz.WXKG12LM_action_click_multistate, fz.ignore_onoff_change,fz.ignore_basic_change, fz.ignore_multistate_change,";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.sensor_swit';
$par1['model'] = "WXKG12LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara wireless switch (with gyroscope)";		 
$par1['extend'] = "";		 
$par1['supports'] = "single, double, shake, hold, release";		 
$par1['fromZigbee'] = "fz.xiaomi_battery_3v, fz.WXKG12LM_action_click_multistate, fz.ignore_onoff_change,fz.ignore_basic_change, fz.ignore_multistate_change,";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.remote.b186acn01\u0000\u0000\u0000';
$par1['model'] = "WXKG03LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara single key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "single click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'lumi.sensor_86sw1\u0000lu';
$par1['model'] = "WXKG03LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara single key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "single click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.sensor_86sw2.es1';
$par1['model'] = "WXKG02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara double key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "left, right and both click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_86sw2';
$par1['model'] = "WXKG02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara double key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "left, right and both click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.sensor_86sw2Un';
$par1['model'] = "WXKG02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara double key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "left, right and both click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'lumi.sensor_86sw2\u0000Un';
$par1['model'] = "WXKG02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara double key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "left, right and both click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.remote.b286acn01\u0000\u0000\u0000';
$par1['model'] = "WXKG02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Aqara double key wireless wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "left, right and both click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.ctrl_neutral1';
$par1['model'] = "QBKG04LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "switch";		 
$par1['description'] = "Aqara single key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.ctrl_ln1';
$par1['model'] = "QBKG11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "switch";		 
$par1['description'] = "Aqara single key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.ctrl_ln1.aq1';
$par1['model'] = "QBKG11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "switch";		 
$par1['description'] = "Aqara single key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'QBKG25LM';
$par1['model'] = "QBKG25LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "switch";		 
$par1['description'] = "Aqara D1 3 gang smart wall switch (no neutral wire)";		 
$par1['extend'] = "";		 
$par1['supports'] = "switch (state), power_outage_memory, action, linkquality";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						




$par1['zigbeeModel'] = 'lumi.ctrl_neutral2';
$par1['model'] = "QBKG03LM";		 
$par1['type'] = "switch";		 
$par1['vendor'] = "Xiaomi";		 
$par1['description'] = "Aqara double key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "release/hold, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.ctrl_ln2.aq1';
$par1['model'] = "QBKG12LM";		 
$par1['vendor'] = "Xiaomi";
$par1['type'] = "switch";		 		 
$par1['description'] = "Aqara double key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sens';
$par1['model'] = "WSDCGQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "MiJia temperature & humidity sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "temperature and humidity";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_ht';
$par1['model'] = "WSDCGQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "MiJia temperature & humidity sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "temperature and humidity";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.weather';
$par1['model'] = "WSDCGQ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "Aqara temperature, humidity and pressure sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "temperature, humidity and pressure";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.sensor_motion';
$par1['model'] = "RTCGQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "MiJia human body movement sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "occupancy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_motion.aq2';
$par1['model'] = "RTCGQ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "Aqara human body movement and illuminance sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "occupancy and illuminance";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_magnet';
$par1['model'] = "MCCGQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "MiJia door & window contact sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "contact";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_magnet.aq2';
$par1['model'] = "MCCGQ11LM";		 
$par1['type'] = "sensor";		 
$par1['vendor'] = "Xiaomi";		 
$par1['description'] = "Aqara door & window contact sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "contact";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_wleak.aq1';
$par1['model'] = "SJCGQ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		 
$par1['description'] = "Aqara water leak sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "water leak true/false";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_cube.aqgl01';
$par1['model'] = "MFKZQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Mi/Aqara smart home cube";		 
$par1['extend'] = "";		 
$par1['supports'] = "shake, wakeup, fall, tap, slide, flip180, flip90, rotate_left and rotate_right";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_cube';
$par1['model'] = "MFKZQ01LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "remote";		 
$par1['description'] = "Mi/Aqara smart home cube";		 
$par1['extend'] = "";		 
$par1['supports'] = "shake, wakeup, fall, tap, slide, flip180, flip90, rotate_left and rotate_right";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.plug';
$par1['model'] = "ZNCZ02LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "relay";		 
$par1['description'] = "Mi power plug ZigBee";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.ctrl_86plug';
$par1['model'] = "QBCZ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "plug";		 
$par1['description'] = "Aqara socket Zigbee";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'lumi.ctrl_86plug.aq1';
$par1['model'] = "QBCZ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "plug";		 
$par1['description'] = "Aqara socket Zigbee";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'lumi.sensor_smoke';
$par1['model'] = "JTYJ-GD-01LM-BW";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		
$par1['description'] = "MiJia Honeywell smoke detector";		 
$par1['extend'] = "";		 
$par1['supports'] = "smoke";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.sensor_natgas';
$par1['model'] = "JTQJ-BF-01LM-BW";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		
$par1['description'] = "MiJia gas leak detector";		 
$par1['extend'] = "";		 
$par1['supports'] = "gas";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.lock.v1';
$par1['model'] = "A6121";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "device";		 
$par1['description'] = "Vima Smart Lock";		 
$par1['extend'] = "";		 
$par1['supports'] = "inserted, forgotten, key error";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.vibration.aq1';
$par1['model'] = "DJT11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "sensor";		

$par1['description'] = "Aqara vibration sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "drop, tilt and touch";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.curtain';
$par1['model'] = "ZNCLDJ11LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "openable";		 
$par1['description'] = "Aqara curtain motor";		 
$par1['extend'] = "";		 
$par1['supports'] = "open, close, stop, position";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'lumi.curtainb1';
$par1['model'] = "ZNCLDJ12LM";		 
$par1['vendor'] = "Xiaomi";		 
$par1['type'] = "openable";		 
$par1['description'] = "Aqara B1 curtain motor";		 
$par1['extend'] = "";		 
$par1['supports'] = "open, close, stop, position";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



//IKEA

$par1['zigbeeModel'] = 'TRADFRI bulb E26 WS opal 980lm';
$par1['model'] = "LED1545G12";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E26/E27 980 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'TRADFRI LED bulb E27 1000 lumen,';
$par1['model'] = "LED1732G11";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E27 1000 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, brightness, color temperature";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'TRADFRI bulb E27 WS opal 980lm';
$par1['model'] = "LED1545G12";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E26/E27 980 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'TRADFRI bulb E27 WS\uFFFDopal 980lm';
$par1['model'] = "LED1545G12";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E26/E27 980 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						




$par1['zigbeeModel'] = 'TRADFRI bulb E27 WS clear 950lm';
$par1['model'] = "LED1546G12";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E26/E27 950 lumen, dimmable, white spectrum, clear";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'TRADFRI bulb E26 WS clear 950lm';
$par1['model'] = "LED1546G12";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E26/E27 950 lumen, dimmable, white spectrum, clear";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'TRADFRI bulb E27 W opal 1000lm';
$par1['model'] = "LED1623G12";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E27 1000 lumen, dimmable, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


$par1['zigbeeModel'] = 'TRADFRI bulb E27 opal 1000lm';
$par1['model'] = "LED1623G12";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 
$par1['description'] = "TRADFRI LED bulb E27 1000 lumen, dimmable, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



$par1['zigbeeModel'] = 'TRADFRI bulb GU10 WS 400lm';
$par1['model'] = "LED1537R6";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb GU10 400 lumen, dimmable, white spectrum";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

$par1['zigbeeModel'] = 'TRADFRI bulb GU10 W 400lm';
$par1['model'] = "LED1650R5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb GU10 400 lumen, dimmable";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'TRADFRI bulb E12 WS opal 400lm';
$par1['model'] = "LED1536G5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14 400 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E14 WS opal 400lm';
$par1['model'] = "LED1536G5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14 400 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'TRADFRI bulb E14 W op-ch 400lm';
$par1['model'] = "LED1536G5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14 400 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E14 W op-ch 400lm';
$par1['model'] = "LED1536G5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14 400 lumen, dimmable, white spectrum, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);






$par1['zigbeeModel'] = 'TRADFRI bulb E26 opal 1000lm';
$par1['model'] = "LED1622G12";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E26 1000 lumen, dimmable, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'TRADFRI bulb E26 W opal 1000lm';
$par1['model'] = "LED1622G12";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E26 1000 lumen, dimmable, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E26 CWS opal 600lm';
$par1['model'] = "LED1624G9";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E27/E26 600 lumen, dimmable, color, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E27 CWS opal 600lm';
$par1['model'] = "LED1624G9";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E27/E26 600 lumen, dimmable, color, opal white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E14 W op-ch 400lm';
$par1['model'] = "LED1649C5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14/E17 400 lumen, dimmable warm white, chandelier opal";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E12 W op-ch 400lm';
$par1['model'] = "LED1649C5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14/E17 400 lumen, dimmable warm white, chandelier opal";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI bulb E17 W op-ch 400lm';
$par1['model'] = "LED1649C5";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "bulb";		 	 
$par1['description'] = "TRADFRI LED bulb E12/E14/E17 400 lumen, dimmable warm white, chandelier opal";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'TRADFRI wireless dimmer';
$par1['model'] = "ICTC-G-1";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "remote";		 	 
$par1['description'] = "TRADFRI wireless dimmer";		 
$par1['extend'] = "";		 
$par1['supports'] = "brightness [0-255], quick rotate for instant 0/255";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'TRADFRI transformer 10W';
$par1['model'] = "ICPSHC24-10EU-IL-1";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "dimmer";		 	 
$par1['description'] = "TRADFRI driver for wireless control (10 watt)";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI Driver 10W';
$par1['model'] = "TRADFRI Driver 10W";		 
$par1['vendor'] = "IKEA";	
$par1['type'] = "dimmer";		 	 
$par1['description'] = "TRADFRI driver for wireless control (10 watt)";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'TRADFRI transformer 30W';
$par1['model'] = "ICPSHC24-30EU-IL-1";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "dimmer";		 	 
$par1['description'] = "TRADFRI driver for wireless control (30 watt)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'FLOALT panel WS 30x30';
$par1['model'] = "L1527";		 
$par1['type'] = "bulb";		 	 
$par1['vendor'] = "IKEA";		 
$par1['description'] = "FLOALT LED light panel, dimmable, white spectrum (30x30 cm)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'FLOALT panel WS 60x60';
$par1['model'] = "L1529";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "FLOALT LED light panel, dimmable, white spectrum (60x60 cm)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'FLOALT panel WS 30x90';
$par1['model'] = "L1528";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "FLOALT LED light panel, dimmable, white spectrum (30x90 cm)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'SURTE door WS 38x64';
$par1['model'] = "L1531";		 
$par1['type'] = "bulb";		 	 
$par1['vendor'] = "IKEA";		 
$par1['description'] = "SURTE door light panel, dimmable, white spectrum (38x64 cm)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'TRADFRI control outlet';
$par1['model'] = "E1603";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "plug";		 	 
$par1['description'] = "TRADFRI control outlet";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI remote control';
$par1['model'] = "E1524";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "TRADFRI remote control";		 
$par1['extend'] = "";		 
$par1['supports'] = "toggle, arrow left/right click/hold/release, brightness up/down click/hold/release";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'TRADFRI remote control';
$par1['model'] = "E1524-E1810";		 
$par1['vendor'] = "IKEA";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "TRADFRI remote control";		 
$par1['extend'] = "";		 
$par1['supports'] = "toggle, arrow left/right click/hold/release, brightness up/down click/hold/release";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'cc2531';
$par1['model'] = "cc2531";		 
$par1['vendor'] = "Texas Instruments";		 
$par1['type'] = "controller";		 	 
$par1['description'] = "USB C2531 dongle";		 
$par1['extend'] = "";		 
$par1['supports'] = "coordinator, router";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


    // Philips

$par1['zigbeeModel'] = 'LLC011';
$par1['model'] = "7299760PH";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Bloom";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


//8718699693985 
$par1['zigbeeModel'] = '8718699693985 ';
$par1['model'] = "8718699693985 ";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "Hue smart button";		 
$par1['extend'] = "";		 
$par1['supports'] = "action";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LLC012';
$par1['model'] = "7299760PH";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Bloom";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LLC020';
$par1['model'] = "7146060PH";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Go";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LWB004';
$par1['model'] = "433714";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Lux A19 bulb E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LWB006';
$par1['model'] = "9290011370";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white A60 bulb E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LWB014';
$par1['model'] = "9290011370";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white A60 bulb E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LWB010';
$par1['model'] = "8718696449691";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue White Single bulb B22";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LST001';
$par1['model'] = "7299355PH";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance LightStrip";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colorxy,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LST002';
$par1['model'] = "915005106701";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance LightStrip plus";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT001';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'LCT007';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT010';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT012';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);$par1

['zigbeeModel'] = 'LCT014';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT015';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LCT016';
$par1['model'] = "9290012573A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance E26/E27/E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);






$par1['zigbeeModel'] = 'LCT002';
$par1['model'] = "9290002579A";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance BR30";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT003';
$par1['model'] = "8718696485880";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white and color ambiance GU10";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LCT024';
$par1['model'] = "915005733701";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue White and color ambiance Play Lightbar";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LTW011';
$par1['model'] = "464800";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance BR30 flood light";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTW012';
$par1['model'] = "8718696695203";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance E14";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTW013';
$par1['model'] = "8718696598283";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance GU10";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTW010';
$par1['model'] = "8718696548738";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance E26/E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 

SQLInsert('zigbee2mqtt_devices_list', $par1);
$par1['zigbeeModel'] = 'LTW001';
$par1['model'] = "8718696548738";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance E26/E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LTW004';
$par1['model'] = "8718696548738";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance E26/E27";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTC001';
$par1['model'] = "3261030P7";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Being";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTC003';
$par1['model'] = "3261331P7";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance Still";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTC015';
$par1['model'] = "3216331P5";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance Aurelle rectangle panel light";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LTC016';
$par1['model'] = "3216431P5";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue white ambiance Aurelle round panel light";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LLC010';
$par1['model'] = "7199960PH";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue Iris";		 
$par1['extend'] = "";		 
$par1['supports'] = "hue.light_onoff_brightness_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'RWL020';
$par1['model'] = "324131092621";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "Hue dimmer switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'RWL021';
$par1['model'] = "324131092621";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "dimmer";		 	 
$par1['description'] = "Hue dimmer switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'SML001';
$par1['model'] = "9290012607";		 
$par1['vendor'] = "Philips";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Hue motion sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "occupancy, temperature, illuminance";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Belkin

$par1['zigbeeModel'] = 'MZ100';
$par1['model'] = "F7C033";		 
$par1['vendor'] = "Belkin";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "WeMo smart LED bulb";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

// EDP
$par1['zigbeeModel'] = 'ZB-SmartPlug-1.0.0';
$par1['model'] = "PLUG EDP RE:DY";		 
$par1['vendor'] = "EDP";		 
$par1['type'] = "plug";		 	 
$par1['description'] = "re:dy plug";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off, power measurement";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

   // Custom devices (DiY)
$par1['zigbeeModel'] = 'lumi.router';
$par1['model'] = "CC2530.ROUTER";		 
$par1['vendor'] = "Custom devices (DiY)";		 
$par1['type'] = "plug";		 	 
$par1['description'] = "[CC2530 router](http://ptvo.info/cc2530-based-zigbee-coordinator-and-router-112/)";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, description, type, rssi";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

   // Custom devices (DiY)
$par1['zigbeeModel'] = 'DNCKAT_S001';
$par1['model'] = "DNCKATSW001";		 
$par1['vendor'] = "Custom devices (DiY)";		 
$par1['type'] = "plug";		 	 
$par1['description'] = "[DNCKAT single key wired wall light switch](https://github.com/dzungpv/dnckatsw00x/)";		 
$par1['extend'] = "";		 
$par1['supports'] = "on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


   // Custom devices (DiY)
$par1['zigbeeModel'] = 'DNCKAT_S002';
$par1['model'] = "DNCKATSW002";		 
$par1['vendor'] = "Custom devices (DiY)";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "[DNCKAT double key wired wall light switch](https://github.com/dzungpv/dnckatsw00x/)";		 
$par1['extend'] = "";		 
$par1['supports'] = "hold/release, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

   // Custom devices (DiY)
$par1['zigbeeModel'] = 'DNCKAT_S003';
$par1['model'] = "DNCKATSW003";		 
$par1['vendor'] = "Custom devices (DiY)";		 
$par1['type'] = "remote";		 	 
$par1['description'] = "[DNCKAT single key wired wall light switch](https://github.com/dzungpv/dnckatsw00x/)";		 
$par1['extend'] = "";		 
$par1['supports'] = "hold/release, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


   // Custom devices (DiY)
$par1['zigbeeModel'] = 'DNCKAT_S004';
$par1['model'] = "DNCKATSW004";		 
$par1['vendor'] = "Custom devices (DiY)";		 
$par1['type'] = "remote";
$par1['description'] = "[DNCKAT double key wired wall light switch](https://github.com/dzungpv/dnckatsw00x/)";		 
$par1['extend'] = "";		 
$par1['supports'] = "hold/release, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

   // eCozy
$par1['zigbeeModel'] = 'Thermostat';
$par1['model'] = "1TST-EU";		 
$par1['vendor'] = "Smart heating thermostat";		 
$par1['type'] = "thermostat";
$par1['description'] = "temperature, occupancy, un-/occupied heating, schedule";		 
$par1['extend'] = "";		 
$par1['supports'] = "hold/release, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

//OSRAM

$par1['zigbeeModel'] = 'Outdoor Lantern W RGBW OSRAM';
$par1['model'] = "4058075816718";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "SMART+ outdoor wall lantern RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'Outdoor Lantern W RGBW OSRAM';
$par1['model'] = "AA69697";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Classic A60 RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'CLA60 RGBW OSRAM';
$par1['model'] = "AC03645";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Classic A60 RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = "LIGHTIFY LED CLA60 E27 RGBW";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'CLA60 TW OSRAM';
$par1['model'] = "AC03642";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "SMART+ CLASSIC A 60 TW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'LIGHTIFY A19 Tunable White';
$par1['model'] = "AA70155";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY LED A19 tunable white / Classic A60 TW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'Classic A60 TW';
$par1['model'] = "AA70155";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY LED A19 tunable white / Classic A60 TW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'PAR16 50 TW';
$par1['model'] = "AA68199";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY LED PAR16 50 GU10 tunable white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Classic B40 TW - LIGHTIFY';
$par1['model'] = "AB32840";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY LED Classic B40 tunable white";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Ceiling TW OSRAM';
$par1['model'] = "4058075816794";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Smart+ Ceiling TW";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Classic A60 W clear - LIGHTIFY';
$par1['model'] = "AC03641";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY LED Classic A60 clear";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Surface Light W ?C LIGHTIFY';
$par1['model'] = "4052899926158";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "LIGHTIFY Surface Light TW";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'Plug 01';
$par1['model'] = "AB3257001NJ";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "plug";		 	 
$par1['description'] = "Smart+ plug";		 
$par1['extend'] = "";		 
$par1['supports'] = "";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'Flex RGBW, LIGHTIFY Indoor Flex RGBW';
$par1['model'] = "4052899926110";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Flex RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'LIGHTIFY Outdoor Flex RGBW';
$par1['model'] = "4058075036185";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Outdoor Flex RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = " generic.light_onoff_brightness_colortemp_colorxy,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'Gardenpole RGBW-Lightify';
$par1['model'] = "4058075036147";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Smart+ Gardenpole RGBW";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = 'PAR 16 50 RGBW - LIGHTIFY';
$par1['model'] = "AB35996";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Smart+ Spot GU10 Multicolor";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'B40 DIM Z3';
$par1['model'] = "AC08562";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "SMART+ Candle E14 Dimmable White";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Motion Sensor-A';
$par1['model'] = "AC01353010G";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "sensor";		 	 
$par1['description'] = "occupancy and temperature";		 
$par1['extend'] = "";		 
$par1['supports'] = "";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'Lightify Switch Mini';
$par1['model'] = "AC0251100NJ";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Smart+ switch mini";		 
$par1['extend'] = "";		 
$par1['supports'] = ",";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'Lightify Switch Mini\u0000';
$par1['model'] = "AC0251100NJ";		 
$par1['vendor'] = "OSRAM";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Smart+ switch mini";		 
$par1['extend'] = "";		 
$par1['supports'] = ",";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

//Hive
$par1['zigbeeModel'] = 'FWBulb01';
$par1['model'] = "HALIGHTDIMWWE27";		 
$par1['vendor'] = "Hive";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Active smart bulb white LED (E27)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'FWBulb02UK';
$par1['model'] = "HALIGHTDIMWWB22";		 
$par1['vendor'] = "Hive";		 
$par1['type'] = "bulb";		 	 
$par1['description'] = "Active smart bulb white LED (B22)";		 
$par1['extend'] = "";		 
$par1['supports'] = "generic.light_onoff_brightness,";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);


//Innr
$par1['zigbeeModel'] = "RB 185 C";
$par1['model'] = "RB-185-C";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"  ;
$par1['description'] = "E27 Bulb RGBW";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "BY 185 C";
$par1['model'] = "BY-185-C";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb" ; 
$par1['description'] = "B22 Bulb RGBW";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 285 C";
$par1['model'] = "RB-285-C";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb";  
$par1['description'] = "E27 Bulb RGBW";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 165";
$par1['model'] = "RB-165";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb" ; 
$par1['description'] = "E27 Bulb";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 175 W";
$par1['model'] = "RB-175-W";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"  ;
$par1['description'] = "E27 Bulb warm dimming";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 178 T";
$par1['model'] = "RB-178-T";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"   ;
$par1['description'] = "Smart bulb tunable white E27";
$par1['supports'] = "generic.light_onoff_brightness_colortemp,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RS 125";
$par1['model'] = "RS-125";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"    ;
$par1['description'] = "GU10 Spot";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RS 128 T";
$par1['model'] = "RS-128-T";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"     ;
$par1['description'] = "GU10 Spot 350 lm, dimmable, white spectrum";
$par1['supports'] = "generic.light_onoff_brightness_colortemp,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 145";
$par1['model'] = "RB-145";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"      ;
$par1['description'] = "E14 Candle";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RB 248 T";
$par1['model'] = "RB-248-T";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"       ;
$par1['description'] = "E14 Candle with white spectrum";
$par1['supports'] = "generic.light_onoff_brightness_colortemp,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "BY 165, BY 265";
$par1['model'] = "BY-165";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"        ;
$par1['description'] = "B22 Bulb dimmable";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "PL 110";
$par1['model'] = "PL-110";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"         ;
$par1['description'] = "Puck Light";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "ST 110";
$par1['model'] = "ST-110";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"  ;
$par1['description'] = "Strip Light";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "UC 110";
$par1['model'] = "UC-110";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"   ;
$par1['description'] = "Under Cabinet Light";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "DL 110 N";
$par1['model'] = "DL-110-N";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"    ;
$par1['description'] = "Spot narrow";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "DL 110 W";
$par1['model'] = "DL-110-W";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"     ;
$par1['description'] = "Spot wide";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "SL 110 N";
$par1['model'] = "SL-110-N";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"      ;
$par1['description'] = "Spot Flex narrow";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "SL 110 M";
$par1['model'] = "SL-110-M";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"  ;
$par1['description'] = "Spot Flex medium";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "SL 110 W";
$par1['model'] = "SL-110-W";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"   ;
$par1['description'] = "Spot Flex wide";
$par1['supports'] = "generic.light_onoff_brightness,";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "SP 120";
$par1['model'] = "SP-120";
$par1['vendor'] = "Innr";
$par1['type'] = "bulb"    ;
$par1['description'] = "Smart plug";
$par1['supports'] = "on/off, power measurement";
$par1['fromZigbee'] = "fz.ignore_electrical_change, fz.SP120_power, fz.generic_state, fz.ignore_onoff_change,";
$par1['toZigbee'] =  "tz.on_off";
SQLInsert('zigbee2mqtt_devices_list', $par1);


// Sylvania;

$par1['zigbeeModel'] = "LIGHTIFY RT Tunable White";
$par1['model'] = "73742";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED adjustable white RT 5/6";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "LIGHTIFY BR Tunable White";
$par1['model'] = "73740";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED adjustable white BR30";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "LIGHTIFY A19 RGBW";
$par1['model'] = "73693";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED RGBW A19";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'LIGHTIFY A19 ON-OFF-DIM" LIGHTIFY A19 ON-OFF-DIM 10 Year';
$par1['model'] = "74283";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED soft white dimmable A19";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "A19 W 10 year";
$par1['model'] = "74696";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED soft white dimmable A19";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "PLUG";
$par1['model'] = "72922-A";
$par1['vendor'] = "Sylvania";
$par1['type'] = "plug";  
$par1['description'] = "SMART+ Smart Plug";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.ignore_onoff_change, fz.generic_state";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "MR16 TW";
$par1['model'] = "74282";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "Smart Home adjustable white MR16 LED bulb";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "LIGHTIFY Gardenspot RGB";
$par1['model'] = "LTFY004";
$par1['vendor'] = "Sylvania";
$par1['type'] = "bulb";  
$par1['description'] = "LIGHTIFY LED gardenspot mini RGB";
$par1['supports'] = "generic.light_onoff_brightness_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


// GE;

$par1['zigbeeModel'] = "ZLL Light";
$par1['model'] = "22670";
$par1['vendor'] = "GE";
$par1['type'] = "bulb";  
$par1['description'] = "Link smart LED light bulb, BR30 soft white (2700K)";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "45852";
$par1['model'] = "45852GE";
$par1['vendor'] = "GE";
$par1['type'] = "dimmer";  
$par1['description'] = "ZigBee plug-in smart dimmer";
$par1['supports'] = "on/off, brightness";
$par1['fromZigbee'] = "fz.light_brightness, fz.ignore_onoff_change, fz.generic_state";
$par1['toZigbee'] =  "tz.on_off, tz.light_brightness, tz.ignore_transition";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "45856";
$par1['model'] = "45856GE";
$par1['vendor'] = "GE";
$par1['type'] = "sensor";  
$par1['description'] = "In-wall smart switch";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.ignore_onoff_change, fz.generic_state";
$par1['toZigbee'] =  "tz.on_off, tz.ignore_transition";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "45857";
$par1['model'] = "45857GE";
$par1['vendor'] = "GE";
$par1['type'] = "remote";  
$par1['description'] = "ZigBee in-wall smart dimmer";
$par1['supports'] = "on/off, brightness";
$par1['fromZigbee'] = "fz.light_brightness, fz.ignore_onoff_change, fz.generic_state";
$par1['toZigbee'] =  "tz.on_off, tz.light_brightness, tz.ignore_transition";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Sengled;

$par1['zigbeeModel'] = "E11-G13";
$par1['model'] = "E11-G13";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Classic (A19)";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = 'E11-G23" E11-G33';
$par1['model'] = "E11-G23-E11-G33";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Classic (A60)";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "Z01-CIA19NAE26";
$par1['model'] = "Z01-CIA19NAE26";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Touch (A19)";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "Z01-A19NAE26";
$par1['model'] = "Z01-A19NAE26";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Plus (A19)";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "E11-N1EA";
$par1['model'] = "E11-N1EA";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Plus Color (A19)";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "E12-N14";
$par1['model'] = "E12-N14";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element Classic (BR30)";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "E1A-AC2";
$par1['model'] = "E1ACA4ABE38A";
$par1['vendor'] = "Sengled";
$par1['type'] = "bulb";  
$par1['description'] = "Element downlight smart LED bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// JIAWEN;

$par1['zigbeeModel'] = "FB56-ZCW08KU1.1";
$par1['model'] = "K2RGBW01";
$par1['vendor'] = "JIAWEN";
$par1['type'] = "bulb";  
$par1['description'] = "Wireless Bulb E27 9W RGBW";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Netvox;

$par1['zigbeeModel'] = "Z809AE3R";
$par1['model'] = "Z809A";
$par1['vendor'] = "Netvox";
$par1['type'] = "plug";  
$par1['description'] = "Power socket with power consumption monitoring";
$par1['supports'] = "on/off, power measurement";
$par1['fromZigbee'] = "fz.generic_state, fz.ignore_onoff_change, fz.ignore_electrical_change, fz.Z809A_power";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Nanoleaf;

$par1['zigbeeModel'] = "NL08-0800";
$par1['model'] = "NL08-0800";
$par1['vendor'] = "Nanoleaf";
$par1['type'] = "bulb";  
$par1['description'] = "Smart Ivy Bulb E27";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Nue;

$par1['zigbeeModel'] = "FB56+ZSW05HG1.2";
$par1['model'] = "FB56+ZSW05HG1.2";
$par1['vendor'] = "Nue";
$par1['type'] = "remote";  
$par1['description'] = "ZigBee one gang smart switch";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "z.generic_state";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "FNB56-SKT1DHG1.4";
$par1['model'] = "MG-AUWS01";
$par1['vendor'] = "Nue";
$par1['type'] = "switch";  
$par1['description'] = "ZigBee Double GPO";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.nue_power_state, fz.ignore_onoff_change";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "FNB56-ZSW23HG1.1";
$par1['model'] = "HGZB-01A";
$par1['vendor'] = "Nue";
$par1['type'] = "controller";  
$par1['description'] = "ZigBee smart light controller";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Gledopto;

$par1['zigbeeModel'] = 'GLEDOPTO" GL-C-008';
$par1['model'] = "GL-C-008";
$par1['vendor'] = "Gledopto";
$par1['type'] = "dimmer";  
$par1['description'] = "Zigbee LED controller RGB + CCT / RGBW / WWCW / Dimmer";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'GLEDOPTO" GL-C-007';
$par1['model'] = "GL-C-007";
$par1['vendor'] = "Gledopto";
$par1['type'] = "dimmer";  
$par1['description'] = "Zigbee LED controller RGB + CCT / RGBW / WWCW / Dimmer";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = 'GL-C-007-2ID';
$par1['model'] = "GL-C-007-2ID";
$par1['vendor'] = "Gledopto";
$par1['type'] = "dimmer";  
$par1['description'] = "Zigbee LED controller RGB + CCT / RGBW / WWCW / Dimmer";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



$par1['zigbeeModel'] = "GL-C-006";
$par1['model'] = "GL-C-006";
$par1['vendor'] = "Gledopto";
$par1['type'] = "controller";  
$par1['description'] = "Zigbee LED controller WW/CW Dimmer";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "GL-S-007Z";
$par1['model'] = "GL-S-007Z";
$par1['vendor'] = "Gledopto";
$par1['type'] = "bulb";  
$par1['description'] = "Smart RGBW GU10";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "GL-B-008Z";
$par1['model'] = "GL-B-008Z";
$par1['vendor'] = "Gledopto";
$par1['type'] = "bulb";  
$par1['description'] = "Smart 12W E27 RGB / CW LED bulb";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "GL-D-003Z";
$par1['model'] = "GL-D-003Z";
$par1['vendor'] = "Gledopto";
$par1['type'] = "controller";  
$par1['description'] = "LED RGB + CCT downlight";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "HOMA2023";
$par1['model'] = "GD-CZ-006";
$par1['vendor'] = "Gledopto";
$par1['type'] = "dimmer";  
$par1['description'] = "Zigbee LED Driver";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// SmartThings;

$par1['zigbeeModel'] = "PGC313";
$par1['model'] = "STSS-MULT-001";
$par1['vendor'] = "SmartThings";
$par1['type'] = "sensor";  
$par1['description'] = "Multipurpose sensor";
$par1['supports'] = "contact";
$par1['fromZigbee'] = "fz.smartthings_contact";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "tagv4";
$par1['model'] = "STS-PRS-251";
$par1['vendor'] = "SmartThings";
$par1['type'] = "sensor";  
$par1['description'] = "Arrival sensor";
$par1['supports'] = "presence";
$par1['fromZigbee'] = "fz.STS_PRS_251_presence, fz.generic_batteryvoltage_3000_2500, fz.ignore_power_change, fz.STS_PRS_251_beeping";
$par1['toZigbee'] =  "tz.STS_PRS_251_beep";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "3325-S";
$par1['model'] = "3325-S";
$par1['vendor'] = "SmartThings";
$par1['type'] = "sensor";  
$par1['description'] = "Motion sensor (2015 model)";
$par1['supports'] = "occupancy and temperature";
$par1['fromZigbee'] = "fz.generic_temperature, fz.ignore_temperature_change, fz.ias_zone_motion_dev_change, fz.ias_zone_motion_status_change";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "3321-S";
$par1['model'] = "3321-S";
$par1['vendor'] = "SmartThings";
$par1['type'] = "sensor";  
$par1['description'] = "Multi Sensor (2015 model)";
$par1['supports'] = "contact and temperature";
$par1['fromZigbee'] = "fz.generic_temperature, fz.ignore_temperature_change, fz.smartsense_multi";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Trust;





$par1['zigbeeModel'] = "ZLL-ColorTempera";
$par1['model'] = "ZLED-2709";
$par1['vendor'] = "Trust";
$par1['type'] = "bulb"; 
$par1['description'] = "Smart Dimmable LED Bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = "ZLED-2709";
$par1['model'] = "ZLED-2709";
$par1['vendor'] = "Trust";
$par1['type'] = "bulb"; 
$par1['description'] = "Smart Dimmable LED Bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = "ZLED-TUNE9";
$par1['model'] = "ZLED-TUNE9";
$par1['vendor'] = "Trust";
$par1['type'] = "bulb"; 
$par1['description'] = "Smart Dimmable CCT LED Bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "ZLL-DimmableLigh";
$par1['model'] = "81809";
$par1['vendor'] = "Trust";
$par1['type'] = "bulb"; 
$par1['description'] = "Smart Dimmable CCT RGB LED Bulb";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = "ZLL-ExtendedColo";
$par1['model'] = "ZLL-ExtendedColo";
$par1['vendor'] = "Trust";
$par1['type'] = "bulb"; 
$par1['description'] = "Smart Dimmable CCT RGB LED Bulb";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);




$par1['zigbeeModel'] = "VMS_ADUROLIGHT";
$par1['model'] = "ZPIR-8000";
$par1['vendor'] = "Trust";
$par1['type'] = "sensor";  
$par1['description'] = "Motion Sensor";
$par1['supports'] = "occupancy";
$par1['fromZigbee'] = "fz.ias_zone_motion_dev_change, fz.ias_zone_motion_status_change";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "CSW_ADUROLIGHT";
$par1['model'] = "ZCTS-808";
$par1['vendor'] = "Trust";
$par1['type'] = "sensor";
$par1['description'] = "Wireless contact sensor";
$par1['supports'] = "contact";
$par1['fromZigbee'] = "fz.ias_contact_dev_change, fz.ias_contact_status_change";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Paulmann;

$par1['zigbeeModel'] = "Dimmablelight ";
$par1['model'] = "50045";
$par1['vendor'] = "Paulmann";
$par1['type'] = "controller"; 
$par1['description'] = "SmartHome Zigbee LED-stripe";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "RGBW light";
$par1['model'] = "50049";
$par1['vendor'] = "Paulmann";
$par1['type'] = "controller";
$par1['description'] = "SmartHome Yourled RGB Controller";
$par1['supports'] = "generic.light_onoff_brightness_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Bitron;

$par1['zigbeeModel'] = "902010-22";
$par1['model'] = "AV2010-22";
$par1['vendor'] = "Bitron";
$par1['type'] = "sensor";
$par1['description'] = "Wireless motion detector";
$par1['supports'] = "occupancy";
$par1['fromZigbee'] = "fz.bitron_occupancy";
$par1['extend'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "902010-25";
$par1['model'] = "AV2010/25";
$par1['vendor'] = "Bitron";
$par1['type'] = "plug";
$par1['description'] = "Video wireless socket";
$par1['supports'] = "on/off power measurement";
$par1['fromZigbee'] = "fz.generic_state, fz.ignore_onoff_change, fz.ignore_metering_change, fz.bitron_power";
$par1['toZigbee'] = "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "902010-32";
$par1['model'] = "AV2010-32";
$par1['vendor'] = "Bitron";
$par1['type'] = "thermostat";
$par1['description'] = "Wireless wall thermostat with relay";
$par1['supports'] = "temperature heating/cooling system control";
$par1['fromZigbee'] = "fz.ignore_basic_change, fz.bitron_thermostat_att_report, fz.bitron_thermostat_dev_change, fz.bitron_battery";
$par1['toZigbee'] =  "tz.thermostat_occupied_heating_setpoint, tz.thermostat_local_temperature_calibration, tz.thermostat_local_temperature, tz.thermostat_running_state, tz.thermostat_temperature_display_mode";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Iris;

$par1['zigbeeModel'] = "3210-L";
$par1['model'] = "3210-L";
$par1['vendor'] = "Iris";
$par1['description'] = "Smart plug";
$par1['type'] = "plug";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.ignore_onoff_change, fz.ignore_electrical_change, fz.generic_state, fz.iris_3210L_power";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "3326-L";
$par1['model'] = "3326-L";
$par1['vendor'] = "Iris";
$par1['type'] = "sensor";
$par1['description'] = "Motion and temperature sensor";
$par1['supports'] = "occupancy and temperature";
$par1['fromZigbee'] = "fz.generic_temperature, fz.ignore_temperature_change, fz.ias_zone_motion_dev_change, fz.ias_zone_motion_status_change";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "3320-L";
$par1['model'] = "3320-L";
$par1['vendor'] = "Iris";
$par1['type'] = "sensor";
$par1['description'] = "Contact sensor";
$par1['supports'] = "contact";
$par1['fromZigbee'] = "fz.iris_3320L_contact";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// ksentry;

$par1['zigbeeModel'] = "Lamp_01";
$par1['model'] = "KS-SM001";
$par1['vendor'] = "Ksentry Electronics";
$par1['type'] = "relay";
$par1['description'] = "[Zigbee OnOff Controller](http://ksentry.manufacturer.globalsources.com/si/6008837134660/pdtl/ZigBee-module/1162731630/zigbee-on-off-controller-modules.htm)";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.generic_state_change";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Commercial Electric;

$par1['zigbeeModel'] = "Zigbee CCT Downlight";
$par1['model'] = "53170161";
$par1['vendor'] = "Commercial Electric";
$par1['type'] = "controller";
$par1['description'] = "Matte White Recessed Retrofit Smart Led Downlight - 4 Inch";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// ilux;

$par1['zigbeeModel'] = "LEColorLight";
$par1['model'] = "900008-WW";
$par1['vendor'] = "ilux";
$par1['type'] = "bulb";
$par1['description'] = "Dimmable A60 E27 LED Bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Dresden Elektronik;

$par1['zigbeeModel'] = "FLS-PP3\u0000";
$par1['model'] = "Mega23M12";
$par1['vendor'] = "Dresden Elektronik";
$par1['type'] = "dimmer";
$par1['description'] = "ZigBee Light Link wireless electronic ballast";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Centralite Swiss Plug;

$par1['zigbeeModel'] = "4256251-RZHAC, 4257050-RZHAC";
$par1['model'] = "4256251-RZHAC";
$par1['vendor'] = "Centralite";
$par1['type'] = "plug";
$par1['description'] = "White Swiss power outlet switch with power meter";
$par1['supports'] = "switch and power meter";
$par1['fromZigbee'] = "fz.ignore_onoff_change, fz.generic_state, fz.ignore_electrical_change, fz.RZHAC_4256251_power";
$par1['toZigbee'] = "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Climax;

$par1['zigbeeModel'] = "PSS_00.00.00.15TC";
$par1['model'] = "PSS-23ZBS";
$par1['vendor'] = "Climax";
$par1['type'] = "plug";
$par1['description'] = "Power plug";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.generic_state_change";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// HEIMAN;

$par1['zigbeeModel'] = 'SMOK_V16" b5db59bfd81e4f1f95dc57fdbba17931" SMOK_YDLV10';
$par1['model'] = "HS1SA";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "sensor";
$par1['description'] = "Smoke detector";
$par1['supports'] = "smoke";
$par1['fromZigbee'] = "fz.heiman_smoke";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "SmokeSensor-N";
$par1['model'] = "HS3SA";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "sensor";
$par1['description'] = "Smoke detector";
$par1['supports'] = "smoke";
$par1['fromZigbee'] = "fz.heiman_smoke";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "DoorSensor-N";
$par1['model'] = "HS1DS";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "sensor";
$par1['description'] = "Door sensor";
$par1['supports'] = "contact";
$par1['fromZigbee'] = "fz.heiman_contact";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "WaterSensor-N";
$par1['model'] = "HS1WL";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "sensor";
$par1['description'] = "Water leakage sensor";
$par1['supports'] = "water leak";
$par1['fromZigbee'] = "fz.heiman_water_leak";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//SSHM-I1
$par1['zigbeeModel'] = "WaterSensor-N";
$par1['model'] = "HS2SK";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "plug";
$par1['description'] = "Heiman power plug";
$par1['supports'] = "state";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//HS2SK
$par1['zigbeeModel'] = "WaterSensor-N";
$par1['model'] = "HS2SK";
$par1['vendor'] = "GS";
$par1['type'] = "sensor";
$par1['description'] = "Smoke detector";
$par1['supports'] = "leak";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//HS2WD-E
$par1['zigbeeModel'] = "HS2WD-E";
$par1['model'] = "SRHMP-I1";
$par1['vendor'] = "HEIMAN";
$par1['type'] = "sensor";
$par1['description'] = "Smart siren";
$par1['supports'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);










// Calex;

$par1['zigbeeModel'] = "EC-Z3.0-CCT ";
$par1['model'] = "421786";
$par1['vendor'] = "Calex";
$par1['type'] = "bulb";
$par1['description'] = "LED A60 Zigbee GLS-lamp";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// EcoSmart;

$par1['zigbeeModel'] = "zhaRGBW";
$par1['model'] = "D1821";
$par1['vendor'] = "EcoSmart";
$par1['type'] = "bulb";
$par1['description'] = "A19 RGB bulb";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// eslint-disable-next-line;
$par1['zigbeeModel'] = "\u0000\u0002\u0000\u0004\u0000\f^I\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u000e";
$par1['model'] = "D1531";
$par1['vendor'] = "EcoSmart";
$par1['type'] = "bulb";
$par1['description'] = "A19 bright white bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// eslint-disable-next-line;
$par1['zigbeeModel'] = "\u0000\u0002\u0000\u0004\u0012 ?P\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u0000\u000e";
$par1['model'] = "D1532";
$par1['vendor'] = "EcoSmart";
$par1['type'] = "bulb";
$par1['description'] = "A19 soft white bulb";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Airam;

$par1['zigbeeModel'] = "ZBT-DimmableLight";
$par1['model'] = "4713407";
$par1['vendor'] = "Airam";
$par1['type'] = "bulb";
$par1['description'] = "LED OP A60 ZB 9W/827 E27";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['fromZigbee'] = "fz.light_state, fz.light_brightness_report, fz.light_brightness, fz.generic_state";
$par1['extend'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "ZBT-Remote-EU-DIMV1A2";
$par1['model'] = "AIRAM-CTR.U";
$par1['vendor'] = "Airam";
$par1['type'] = "remote";
$par1['description'] = "CTR.U remote (can only be used to control the Airam 4713407 bulb)";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Smart Home Pty;

$par1['zigbeeModel'] = "FB56-ZCW11HG1.2";
$par1['model'] = "HGZB-07A";
$par1['vendor'] = "Smart Home Pty";
$par1['type'] = "bulb";
$par1['description'] = "RGBW Downlight";
$par1['supports'] = "generic.light_onoff_brightness_colortemp_colorxy";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "FNB56-SKT1EHG1.2";
$par1['model'] = "HGZB-20-DE";
$par1['vendor'] = "Smart Home Pty";
$par1['type'] = "plug";
$par1['description'] = "Power plug";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "fz.generic_state_change";
$par1['toZigbee'] =  "tz.on_off";
$par1['extend'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// Paul Neuhaus;

$par1['zigbeeModel'] = "NLG-CCT light ";
$par1['model'] = "100.424.11";
$par1['vendor'] = "Paul Neuhaus";
$par1['type'] = "bulb";
$par1['description'] = "Q-INIGO LED ceiling light";
$par1['supports'] = "generic.light_onoff_brightness_colortemp";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// iCasa;

$par1['zigbeeModel'] = "ICZB-IW11D";
$par1['model'] = "ICZB-IW11D";
$par1['vendor'] = "iCasa";
$par1['type'] = "dimmer";
$par1['description'] = "Zigbee 3.0 Dimmer";
$par1['supports'] = "generic.light_onoff_brightness";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//LIVOLO

$par1['zigbeeModel'] = "TI0001";
$par1['model'] = "TI0001";
$par1['vendor'] = "Livolo";
$par1['type'] = "switch";
$par1['description'] = "LIVOLO Smart Switch";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//LLKZMK11LM
$par1['zigbeeModel'] = "lumi.relay.c2acn01";
$par1['model'] = "LLKZMK11LM";
$par1['vendor'] = "Xiaomi";
$par1['type'] = "relay";
$par1['description'] = "Xiaomi Aqara wireless relay controller (on/off, power measurement)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//LXZB-02A
$par1['zigbeeModel'] = "LXN56-DC27LX1.1";
$par1['model'] = "LXZB-02A";
$par1['vendor'] = "Nue - 3A";
$par1['type'] = "dimmer";
$par1['description'] = "Nue / 3A Smart light controller (on/off, brightness)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//LXZB-02A
$par1['zigbeeModel'] = "LXN56-DC27LX1.1";
$par1['model'] = "V3-BTZB";
$par1['vendor'] = "Danalock";
$par1['type'] = "door_lock";
$par1['description'] = "BT/ZB smartlock";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//Efekta
$par1['zigbeeModel'] = "EFEKTA_PWS";
$par1['model'] = "EFEKTA_PWS";
$par1['vendor'] = "EFEKTALAB";
$par1['type'] = "semsor";
$par1['description'] = "Plant Wattering Sensor";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = "EFEKTA_THP";
$par1['model'] = "EFEKTA_THP";
$par1['vendor'] = "EFEKTALAB";
$par1['type'] = "semsor";
$par1['description'] = "Temperature, humidity and pressure sensor";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);




//DIYRuZ_Flower
$par1['zigbeeModel'] = "DIYRuZ_Flower";
$par1['model'] = "DIYRuZ_Flower";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "semsor";
$par1['description'] = "DIYRuZ_Flower";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//DIYRuZ_AirSense
$par1['zigbeeModel'] = "DIYRuZ_AirSense";
$par1['model'] = "DIYRuZ_AirSense";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "semsor";
$par1['description'] = "DIYRuZ_AirSense";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//DIYRuZ_Geiger
$par1['zigbeeModel'] = "DIYRuZ_Geiger";
$par1['model'] = "DIYRuZ_Geiger";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "semsor";
$par1['description'] = "DIYRuZ_Geiger";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//DIYRuZ_Flower_WS
$par1['zigbeeModel'] = "DIYRuZ_Flower_WS";
$par1['model'] = "DIYRuZ_Flower_WS";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "controller";
$par1['description'] = "DIYRuZ_Flower_WS";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//DIY_RuZ
$par1['zigbeeModel'] = "DIY_RuZ_KEYPAD20";
$par1['model'] = "DIYRuZ_KEYPAD20";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "remote";
$par1['description'] = "DiY 20 button keypad";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//DIY_RuZ
$par1['zigbeeModel'] = "DIYRuZ_rspm";
$par1['model'] = "DIYRuZ_rspm";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DIYRuZ relay switch power meter";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//DIYRuZ_FreePad
$par1['zigbeeModel'] = "DIYRuZ_FreePad";
$par1['model'] = "DIYRuZ_FreePad";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DIYRuZ_FreePad";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//DIY_RuZ
$par1['zigbeeModel'] = "DIYRuZ_R4_5";
$par1['model'] = "DIYRuZ_R4_5";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DiY 4 Relays + 4 switches + 1 buzzer (modkam.ru)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//DIY_RuZ
$par1['zigbeeModel'] = "DIYRuZ_R4_4";
$par1['model'] = "DIYRuZ_R4_4";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DiY 4 Relays + 4 switches (modkam.ru)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//DIY_RuZ
$par1['zigbeeModel'] = "DIYRuZ_R8_8";
$par1['model'] = "DIYRuZ_R8_8";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DiY 8 Relays + 8 switches + 1 buzzer (modkam.ru)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//DIY_RuZ
$par1['zigbeeModel'] = "DIYRuZ_R4_5";
$par1['model'] = "DIYRuZ_magnet";
$par1['vendor'] = "DIYRuZ";
$par1['type'] = "relay";
$par1['description'] = "DIYRuZ contact sensor";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);





//LXZB-02A
$par1['zigbeeModel'] = "group";
$par1['model'] = "group";
$par1['vendor'] = "group";
$par1['type'] = "group";
$par1['description'] = "group";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


//BASICZBR3
$par1['zigbeeModel'] = "BASICZBR3";
$par1['model'] = "BASICZBR3";
$par1['vendor'] = "SONOFF";
$par1['type'] = "relay";
$par1['description'] = "Zigbee smart switch";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

//BASICZBR3
$par1['zigbeeModel'] = "S31ZB";
$par1['model'] = "S31ZB";
$par1['vendor'] = "SONOFF";
$par1['type'] = "relay";
$par1['description'] = "Zigbee smart switch";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//SNZB-01
$par1['zigbeeModel'] = "SNZB-01";
$par1['model'] = "SNZB-01";
$par1['vendor'] = "SONOFF";
$par1['type'] = "relay";
$par1['description'] = "Wireless button";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



//WXCJKG13LM
$par1['zigbeeModel'] = 'lumi.remote.b686opcn01';
$par1['model'] = "WXCJKG13LM";		 
$par1['type'] = "remote";		 
$par1['vendor'] = "Xiaomi";		 
$par1['description'] = "Aqara double key wired wall switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "release/hold, on/off";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



//universal
$par1['zigbeeModel'] = 'universal remote';
$par1['model'] = "universal remote";		 
$par1['type'] = "remote";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal remote";		 
$par1['extend'] = "";		 
$par1['supports'] = "click";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						



//universal
$par1['zigbeeModel'] = 'universal_dimmable_bulb';
$par1['model'] = "universal_dimmable_bulb";		 
$par1['type'] = "bulb";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal dimmable bulb";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

//universal
$par1['zigbeeModel'] = 'universal_cct_bulb';
$par1['model'] = "universal_cct_bulb";		 
$par1['type'] = "bulb";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal cct bulb";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

//universal
$par1['zigbeeModel'] = 'universal_color_bulb';
$par1['model'] = "universal_color_bulb";		 
$par1['type'] = "bulb";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal color bulb";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

//universal
$par1['zigbeeModel'] = 'universal_1ch_relay';
$par1['model'] = "universal_1ch_relay";		 
$par1['type'] = "relay";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 1ch relay";		 
$par1['extend'] = "";		 
$par1['supports'] = "state";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						


//universal
$par1['zigbeeModel'] = 'universal_openable';
$par1['model'] = "universal_openable";		 
$par1['type'] = "openable";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal openable";		 
$par1['extend'] = "";		 
$par1['supports'] = "open,close";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);						

//universal
$par1['zigbeeModel'] = 'universal_1ch_switch';
$par1['model'] = "universal_1ch_switch";		 
$par1['type'] = "switch";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 1ch switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "state";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							

$par1['zigbeeModel'] = 'universal_2ch_switch';
$par1['model'] = "universal_2ch_switch";		 
$par1['type'] = "switch";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 2ch switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "state_left, state_right";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							


$par1['zigbeeModel'] = 'universal_dimmer';
$par1['model'] = "universal_dimmer";		 
$par1['type'] = "dimmer";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 2ch switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							


$par1['zigbeeModel'] = 'universal_cct_dimmer';
$par1['model'] = "universal_cct_dimmer";		 
$par1['type'] = "dimmer";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 2ch switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness, cct";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							

$par1['zigbeeModel'] = 'universal_color_dimmer';
$par1['model'] = "universal_color_dimmer";		 
$par1['type'] = "dimmer";		 
$par1['vendor'] = "universal";		 
$par1['description'] = "universal 2ch switch";		 
$par1['extend'] = "";		 
$par1['supports'] = "state, brithness";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							

$par1['zigbeeModel'] = 'SPZB0001';
$par1['model'] = "SPZB0001";		 
$par1['type'] = "thermostat";		 
$par1['vendor'] = "Eurotronic";		 
$par1['description'] = "Spirit Zigbee wireless heater thermostat";		 
$par1['extend'] = "";		 
$par1['supports'] = "temperature, heating system control";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							


$par1['zigbeeModel'] = 'GZCGQ01LM';
$par1['model'] = "GZCGQ01LM";		 
$par1['type'] = "sensor";		 
$par1['vendor'] = "Xiaomi";		 
$par1['description'] = "MiJia light intensity sensor";		 
$par1['extend'] = "";		 
$par1['supports'] = "illuminance";		 
$par1['fromZigbee'] = "";		 
$par1['toZigbee'] = "";		 
SQLInsert('zigbee2mqtt_devices_list', $par1);							



//TS0001
$par1['zigbeeModel'] = 'TS0001';
$par1['model'] = "TS0001";
$par1['type'] = "relay";
$par1['vendor'] = "TUYA";
$par1['description'] = "Valve control";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


// GDKES-02TZXD
$par1['zigbeeModel'] = 'TS0012';
$par1['model'] = "GDKES-02TZXD";
$par1['type'] = "switch";
$par1['vendor'] = "TUYATEC";
$par1['description'] = "Smart light switch - 2 gang without neutral wire";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


// GDKES-03TZXD
$par1['zigbeeModel'] = 'TS0013';
$par1['model'] = "GDKES-03TZXD";
$par1['type'] = "switch";
$par1['vendor'] = "TUYATEC";
$par1['description'] = "Smart light switch - 3 gang without neutral wire";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// TS0011
$par1['zigbeeModel'] = 'TS0601_thermostat';
$par1['model'] = "TS0601_thermostat";
$par1['type'] = "thermostat";
$par1['vendor'] = "TUYATEC";
$par1['description'] = "Radiator valve with thermostat";
$par1['extend'] = "";
$par1['supports'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



// _TZE200_aocl_fnxz
$par1['zigbeeModel'] = '_TZE200_aocl_fnxz';
$par1['model'] = "_TZE200_aocl_fnxz";
$par1['type'] = "thermostat";
$par1['vendor'] = "TUYATEC";
$par1['description'] = "Tuya thermostat";
$par1['extend'] = "";
$par1['supports'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



// _TZE200_aocl_fnxz
$par1['zigbeeModel'] = 'BHT-002-GCLZB';
$par1['model'] = "BHT-002-GCLZB";
$par1['type'] = "thermostat";
$par1['vendor'] = "Moes";
$par1['description'] = "Moes BHT series Thermostat";
$par1['extend'] = "";
$par1['supports'] = "lock (state), climate (current_heating_setpoint, local_temperature, system_mode, running_state, preset), linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



///////////////////////////////////////////////////
// _TZ3000_zmy1waw6 (TS011F), _TYZB01_iuepbmpv (TS0121)
$par1['zigbeeModel'] = 'MS-104Z';
$par1['model'] = "MS-104Z";
$par1['type'] = "switch";
$par1['vendor'] = "Moes";
$par1['description'] = "Smart light switch module (1 gang)";
$par1['extend'] = "";
$par1['supports'] = "on/off, linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);
////////////////////////////////////////////////////



// TS0011
$par1['zigbeeModel'] = 'TS0011';
$par1['model'] = "GDKES-01TZXD";
$par1['type'] = "switch";
$par1['vendor'] = "TUYATEC";
$par1['description'] = "Smart light switch - 1 gang without neutral wire";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// TS0201
$par1['zigbeeModel'] = 'TS0201';
$par1['model'] = "TS0201";
$par1['type'] = "sensor";
$par1['vendor'] = "TUYA";
$par1['description'] = "Temperature & humidity sensor with display";
$par1['extend'] = "";
$par1['supports'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);




// TS0011
$par1['zigbeeModel'] = 'MCLH-03';
$par1['model'] = "RICI01";
$par1['type'] = "plug";
$par1['vendor'] = "LifeControl";
$par1['description'] = "Power plug";
$par1['extend'] = "";
$par1['supports'] = "on/off, power measurement";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);



// X712A https://www.zigbee2mqtt.io/devices/X711A.html
$par1['zigbeeModel'] = 'X711A';
$par1['model'] = "X712A";
$par1['type'] = "switch";
$par1['vendor'] = "Lonsonho";
$par1['description'] = "1 gang switch";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// X712A https://www.zigbee2mqtt.io/devices/X712A.html
$par1['zigbeeModel'] = 'X712A';
$par1['model'] = "X712A";
$par1['type'] = "switch";
$par1['vendor'] = "Lonsonho";
$par1['description'] = "2 gang switch";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


// X703A
$par1['zigbeeModel'] = 'X703A';
$par1['model'] = "X703A";
$par1['type'] = "switch";
$par1['vendor'] = "Lonsonho";
$par1['description'] = "3 gang switch";
$par1['extend'] = "";
$par1['supports'] = "on/off";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);


$par1['zigbeeModel'] = "TI0001-switch";
$par1['model'] = "TI0001-switch";
$par1['vendor'] = "Livolo";
$par1['type'] = "switch";
$par1['description'] = "LIVOLO Smart Switch (New)";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

$par1['zigbeeModel'] = "TI0001-socket";
$par1['model'] = "TI0001-socket";
$par1['vendor'] = "Livolo";
$par1['type'] = "switch";
$par1['description'] = "LIVOLO Smart Socket";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);




$par1['zigbeeModel'] = "JTYJ-GD-01LM_BW";
$par1['model'] = "JTYJ-GD-01LM_BW";
$par1['vendor'] = "Xiaomi";
$par1['type'] = "sensor";
$par1['description'] = "MiJia Honeywell smoke detector";
$par1['supports'] = "";
$par1['extend'] = "";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);

// _TZ3000_zmy1waw6 (TS011F), _TYZB01_iuepbmpv (TS0121)
$par1['zigbeeModel'] = 'TS0121';
$par1['model'] = "TS0121";
$par1['type'] = "switch";
$par1['vendor'] = "TuYa";
$par1['description'] = "10A UK or 16A EU smart plug";
$par1['extend'] = "";
$par1['supports'] = "switch (state), power, current, voltage, energy, power_outage_memory, linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);    


// _TZ3000_zmy1waw6 (TS011F), _TYZB01_iuepbmpv (TS0121)
$par1['zigbeeModel'] = 'TS0121';
$par1['model'] = "TS0121";
$par1['type'] = "switch";
$par1['vendor'] = "TuYa";
$par1['description'] = "10A UK or 16A EU smart plug";
$par1['extend'] = "";
$par1['supports'] = "switch (state), power, current, voltage, energy, power_outage_memory, linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);    

// QS-Zigbee-D02-TRIAC-2C-L
$par1['zigbeeModel'] = 'QS-Zigbee-D02-TRIAC-2C-L';
$par1['model'] = "TS0110F";
$par1['type'] = "dimmer";
$par1['vendor'] = "Lonsonho";
$par1['description'] = "2 gang smart dimmer switch module without neutral";
$par1['extend'] = "";
$par1['supports'] = "light (state, brightness), linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);    

// TS0110F
$par1['zigbeeModel'] = 'TS0110F';
$par1['model'] = "TS0110F";
$par1['type'] = "dimmer";
$par1['vendor'] = "TuYa";
$par1['description'] = "2 gang smart dimmer switch module without neutral";
$par1['extend'] = "";
$par1['supports'] = "light (state, brightness), linkquality";
$par1['fromZigbee'] = "";
$par1['toZigbee'] = "";
SQLInsert('zigbee2mqtt_devices_list', $par1);    







}



