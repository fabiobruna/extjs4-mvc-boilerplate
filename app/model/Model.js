/*
 * Datawarehouse, Haaglanden MC
 * Filenaam     : Model.js
 * Description  :
 * Creator      : Fabio Bruna <f.bruna@haaglandenmc.nl>
 */

Ext.define('NameSpace.model.ComboModel', {
    extend: 'Ext.data.Model',

    requires: [
        'Ext.data.field.String'
    ],

    fields: [
        {
            name: 'id'
        },
        {
            type: 'string',
            name: 'text'
        }
    ]
});