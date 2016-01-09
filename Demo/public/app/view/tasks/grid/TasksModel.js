Ext.define('Tasker.view.tasks.grid.TasksModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.tasks-grid-tasks',

    requires:[
        'Tasker.model.Task'
    ],

    stores:{
        tasks:{
            model: 'Tasker.model.Task'
        }
    }
});
