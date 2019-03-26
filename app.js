Ext.application({
    name: 'NameSpace',

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
        views: [
            // Views
        ],
        launch: function() {
            Ext.create('NameSpace.view.MainView');
        }
});

