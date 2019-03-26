/*
 * Datawarehouse, Haaglanden MC
 * Filenaam     : Store.js
 * Description  :
 * Creator      : Fabio Bruna <f.bruna@haaglandenmc.nl>
 */

Ext.define('NameSpace.store.ClusterStore', {
    extend: 'Ext.data.Store',

    requires: [
        'NameSpace.model.ComboModel',
        'Ext.data.proxy.Ajax',
        'Ext.data.reader.Json'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'ClusterStore',
            autoLoad: true,
            model: 'NameSpace.model.ComboModel',
            proxy: {
                type: 'ajax',
                url: 'php/get-data-ClusterCombo.php',
                reader: {
                    type: 'json',
                    rootProperty: 'data'
                }
            },
            listeners: {
                load: {
                    fn: me.onJsonstoreLoad,
                    scope: me
                }
            }
        }, cfg)]);
    },

    onJsonstoreLoad: function() {
        var buttonmain = Ext.ComponentQuery.query('#ClusterCombo')[0];
        buttonmain.select(buttonmain.getStore().getAt(0));
    }

});