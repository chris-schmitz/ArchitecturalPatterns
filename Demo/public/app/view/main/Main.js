Ext.define('Tasker.view.main.Main', {
    extend: 'Ext.panel.Panel',
    xtype: 'app-main',

    requires: [
        'Ext.plugin.Viewport',
        'Tasker.view.tasks.grid.Tasks',
        'Tasker.view.main.MainController',
        'Tasker.view.main.MainModel'
    ],

    controller: 'main',
    viewModel: 'main',

    ui: 'navigation',

    title: 'Tasks',
    items:{
        xtype: 'container',
        itemId: 'contentArea'
    }
});
