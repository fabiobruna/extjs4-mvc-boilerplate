/*
 * Datawarehouse, Haaglanden MC
 * Filenaam     : Controller.js
 * Description  :
 * Creator      : Fabio Bruna <f.bruna@haaglandenmc.nl>
 */

Ext.define('NameSpace.controller.KwaliteitController', {
    extend: 'Ext.app.Controller',

    requires: [
        'Ext.chart.CartesianChart'
    ],

    init: function(application) {
        app=application;

        /** Fix voor vreemd IE11 gedrag, google voor details */

        Ext.define('Ext.overrides.ComboBox', {
            override: 'Ext.form.field.ComboBox',
            checkChangeEvents: Ext.isIE ? ['change', 'propertychange', 'keyup'] : ['change', 'input', 'textInput', 'keyup', 'dragdrop']
        });

    },

    Functienaam: function(value) {

        if (gENV === 'dev') {
            console.log('Functienaam', value);
        }

    }

});
