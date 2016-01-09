Ext.define('Tasker.controller.Navigation', {
    extend: 'Ext.app.Controller',

    requires:[
        'Tasker.view.tasks.grid.Tasks',
        'Tasker.view.tasks.window.Task'
    ],

    refs: {
        contentArea: '#contentArea'
    },

    routes:{
        'tasks': 'onTasksNavigation',
        'tasks/:id': 'onTaskNavigation'
    },

    onTasksNavigation: function (){
        if(this.getContentArea().items.length === 0){
            var grid = Ext.widget('tasksgrid');
            this.getContentArea().add(grid);
        } else {
            this.getContentArea().down('tasksgrid').fireEvent('reloadGrid');
        }
    },

    onTaskNavigation: function (taskId){
        var viewport = Ext.ComponentQuery.query('app-main')[0];
        viewport.mask('Loading...');

        Tasker.model.Task.load(taskId,{
            scope: this,
            callback: function (record, operation, success){
                if(success){
                    var win = Ext.widget('taskwindow');
                    win.fireEvent('loadRecord', record);
                    win.show();
                } else {
                     Ext.toast('Unable to load task.', 'Loading error', 't');
                     this.redirectTo('tasks');
                }
                viewport.unmask();
            }
        });
    }
});
