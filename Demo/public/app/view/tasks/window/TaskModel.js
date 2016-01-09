Ext.define('Tasker.view.tasks.window.TaskModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.tasks-window-task',
    data: {
        title: null,
        record: null,
        status: null
    },

    formulas: {
        statusDisplay: function (get){
            var status = get('status');
            return status === true ? 'Complete' : 'In Progress';
        }
    }

});
