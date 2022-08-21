const fz = require('zigbee-herdsman-converters/converters/fromZigbee');
const tz = require('zigbee-herdsman-converters/converters/toZigbee');
const exposes = require('zigbee-herdsman-converters/lib/exposes');
const reporting = require('zigbee-herdsman-converters/lib/reporting');
const extend = require('zigbee-herdsman-converters/lib/extend');
const e = exposes.presets;
const ea = exposes.access;

const tzLocal = {
    node_config: {
        key: ['report_delay'],
        convertSet: async (entity, key, rawValue, meta) => {
            const lookup = {'OFF': 0x00, 'ON': 0x01};
            const value = lookup.hasOwnProperty(rawValue) ? lookup[rawValue] : parseInt(rawValue, 10);
            const payloads = {
                report_delay: ['genPowerCfg', {0x0201: {value, type: 0x21}}],
            };
            await entity.write(payloads[key][0], payloads[key][1]);
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
                result.report_delay = msg.data[0x0201];
            }
            return result;
        },
    },
};

const definition = {
        zigbeeModel: ['EFEKTA_PWS_Max'],
        model: 'EFEKTA_PWS_MaxPro',
        vendor: 'Custom devices (DiY)',
        description: '[Plant Wattering Sensor EFEKTA_PWS_Max]',
        fromZigbee: [fz.temperature, fz.humidity, fz.illuminance, fz.soil_moisture, fz.battery, fzLocal.node_config],
        toZigbee: [tz.factory_reset, tzLocal.node_config],
        configure: async (device, coordinatorEndpoint, logger) => {
            const firstEndpoint = device.getEndpoint(1);
            await reporting.bind(firstEndpoint, coordinatorEndpoint, [
                'genPowerCfg', 'msTemperatureMeasurement', 'msRelativeHumidity', 'msIlluminanceMeasurement', 'msSoilMoisture']);
            const overides = {min: 0, max: 43200, change: 0};
            await reporting.batteryVoltage(firstEndpoint, overides);
            await reporting.batteryPercentageRemaining(firstEndpoint, overides);
            await reporting.temperature(firstEndpoint, overides);
            await reporting.humidity(firstEndpoint, overides);
            await reporting.illuminance(firstEndpoint, overides);
            await reporting.soil_moisture(firstEndpoint, overides);
			const payload1 = [{attribute: {ID: 0x0201, type: 0x21},
            minimumReportInterval: 0, maximumReportInterval: 21600, reportableChange: 0}];
            await firstEndpoint.configureReporting('genPowerCfg', payload1);
        },
        exposes: [e.soil_moisture(), e.battery(), e.illuminance(), e.temperature(), e.humidity(),
        exposes.numeric('report_delay', ea.STATE_SET).withUnit('Minutes').withDescription('Adjust Report Delay. Setting the time in minutes, by default 30 minutes')
                .withValueMin(1).withValueMax(240)],
};

module.exports = definition;