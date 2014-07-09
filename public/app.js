Ext.application({
    name: 'BL',

    appFolder: 'app',
        models: [
            // Models
        ],
        stores: [
            // Stores
        ],
        controllers: [
            // Controllers
        ],
    launch: function() {
        Ext.create('Ext.container.Viewport', {
            layout: 'fit',
            items: [
                {
                    xtype: 'panel',
                    title: 'Title',
                    html : 'Doe maar iets.'
                }
            ]
        });
    }
});

