Ext.define('Tasker.view.tasks.grid.TasksController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.tasks-grid-tasks',

    onRowClick: function (grid, record){
        this.redirectTo('tasks/' + record.getId());
    },

    onReloadGrid: function (){
        this.getView().getStore().reload();
    }

});
