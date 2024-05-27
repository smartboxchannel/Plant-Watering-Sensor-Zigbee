const fz = require('zigbee-herdsman-converters/converters/fromZigbee');
const tz = require('zigbee-herdsman-converters/converters/toZigbee');
const reporting = require('zigbee-herdsman-converters/lib/reporting');

const tzLocal = {
    node_config: {
        key: ['read_sensors_delay', 'poll_rate_on'],
        convertSet: async (entity, key, rawValue, meta) => {
			const endpoint = meta.device.getEndpoint(2);
            const lookup = {'OFF': 0x00, 'ON': 0x01};
            const value = lookup.hasOwnProperty(rawValue) ? lookup[rawValue] : parseInt(rawValue, 10);
            const payloads = {
                read_sensors_delay: ['genPowerCfg', {0x0201: {value, type: 0x21}}],
				poll_rate_on: ['genPowerCfg', {0x0216: {value, type: 0x10}}],
            };
            await endpoint.write(payloads[key][0], payloads[key][1]);
            return {
                state: {[key]: rawValue},
            };
        },
    },
	node_debug: {
        key: ['lower_level', 'upper_level'],
        convertSet: async (entity, key, rawValue, meta) => {
			const endpoint = meta.device.getEndpoint(2);
            const lookup = {'OFF': 0x00, 'ON': 0x01};
            const value = lookup.hasOwnProperty(rawValue) ? lookup[rawValue] : parseInt(rawValue, 10);
            const payloads = {
                lower_level: ['msSoilMoisture', {0x0502: {value, type: 0x21}}],
				upper_level: ['msSoilMoisture', {0x0503: {value, type: 0x21}}],
            };
            await endpoint.write(payloads[key][0], payloads[key][1]);
            return {
                state: {[key]: rawValue},
            };
        },
    },
	temperaturef_config: {
        key: ['temperature_offset', 'temperature_compensation', 'resolution'],
        convertSet: async (entity, key, rawValue, meta) => {
			const endpoint = meta.device.getEndpoint(1);
			const lookup = {'OFF': 0x00, 'ON': 0x01};
            const value = lookup.hasOwnProperty(rawValue) ? lookup[rawValue] : parseInt(rawValue, 10);
            const value2 = parseFloat(rawValue)*10;
            const payloads = {
                temperature_offset: ['msTemperatureMeasurement', {0x0410: {value2, type: 0x29}}],
				temperature_compensation: ['msTemperatureMeasurement', {0x0504: {value, type: 0x10}}],
				resolution: ['msTemperatureMeasurement', {0x0520: {value, type: 0x20}}],
            };
            await endpoint.write(payloads[key][0], payloads[key][1]);
            return {
                state: {[key]: rawValue},
            };
        },
    },
};

const fzLocal = {
    node_config: {
        cluster: 'genPowerCfg',
        type: ['attributeReport', 'readResponse'],
        convert: (model, msg, publish, options, meta) => {
            const result = {};
            if (msg.data.hasOwnProperty(0x0201)) {
                result.read_sensors_delay = msg.data[0x0201];
            }
			if (msg.data.hasOwnProperty(0x0216)) {
                result.poll_rate_on = ['OFF', 'ON'][msg.data[0x0216]];
            }
            return result;
        },
    },
	node_debug: {
        cluster: 'msSoilMoisture',
        type: ['attributeReport', 'readResponse'],
        convert: (model, msg, publish, options, meta) => {
            const result = {};
			if (msg.data.hasOwnProperty(0x0502)) {
                result.lower_level = msg.data[0x0502];
            }
			if (msg.data.hasOwnProperty(0x0503)) {
                result.upper_level = msg.data[0x0503];
            }
            return result;
        },
    },
	temperaturef_config: {
        cluster: 'msTemperatureMeasurement',
        type: ['attributeReport', 'readResponse'],
        convert: (model, msg, publish, options, meta) => {
            const result = {};
            if (msg.data.hasOwnProperty(0x0410)) {
                result.temperature_offset = parseFloat(msg.data[0x0410])/10.0;
            }
			if (msg.data.hasOwnProperty(0x0504)) {
                result.temperature_compensation = ['OFF', 'ON'][msg.data[0x0504]];
            }
			if (msg.data.hasOwnProperty(0x0520)) {
                result.resolution = msg.data[0x0520];
            }
            return result;
        },
    },
	uptime: {
        cluster: 'genTime',
        type: ['attributeReport', 'readResponse'],
        convert: (model, msg, publish, options, meta) => {
            //return {uptime: Math.round(msg.data.localTime/60)};
			if (msg.data.hasOwnProperty('standardTime')) {
				return {uptime: Math.round(msg.data.standardTime/60/60)};
			}
        },
    },
};

const definition = {
        zigbeeModel: ['Egony_Flower'],
        model: 'Egony_Flower',
        vendor: 'EFEKTA',
        description: '[Soil moisture sensor Egony_Flower, mod DIYRuZ Flower](http://efektalab.com/Egony_Flower)',
        fromZigbee: [fz.temperature, fz.illuminance, fz.soil_moisture, fz.battery, fzLocal.node_config, fzLocal.node_debug, fzLocal.temperaturef_config, fzLocal.uptime],
        toZigbee: [tz.factory_reset, tzLocal.node_config, tzLocal.node_debug, tzLocal.temperaturef_config],
        configure: async (device, coordinatorEndpoint, logger) => {
            const endpoint1 = device.getEndpoint(1);
			const endpoint2 = device.getEndpoint(2);
			const endpoint3 = device.getEndpoint(3);
            await reporting.bind(endpoint1, coordinatorEndpoint, [
                'genTime', 'msTemperatureMeasurement']);
			await reporting.bind(endpoint2, coordinatorEndpoint, [
                'genPowerCfg', 'msSoilMoisture']);
			await reporting.bind(endpoint3, coordinatorEndpoint, [
                'msIlluminanceMeasurement']);
			const overrides1 = {min: 3600, max: 43200, change: 1};
			const overrides2 = {min: 60, max: 3600, change: 25};
			const overrides3 = {min: 60, max: 1800, change: 50};
			const overrides4 = {min: 60, max: 10800, change: 100};
            await reporting.batteryVoltage(endpoint2, overrides1);
            await reporting.batteryPercentageRemaining(endpoint2, overrides1);
			await reporting.batteryAlarmState(endpoint2, overrides1);
            await reporting.temperature(endpoint1, overrides2);
            await reporting.illuminance(endpoint3, overrides3);
            await reporting.soil_moisture(endpoint2, overrides4);
        },
};

module.exports = definition;
