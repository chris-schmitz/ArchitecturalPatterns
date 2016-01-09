Ext.define('Tasker.view.tasks.window.TaskController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.tasks-window-task',

    onLoadRecord: function (record){
        this.lookupReference('taskform').loadRecord(record);
        this.getViewModel().set('title', record.get('description'));
    },

    onDestroy: function (){
        this.redirectTo('tasks');
    }

});
