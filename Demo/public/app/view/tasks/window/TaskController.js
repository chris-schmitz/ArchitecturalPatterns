Ext.define('Tasker.view.tasks.window.TaskController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.tasks-window-task',

    onLoadRecord: function (record){
        this.getViewModel().set('record', record);
        this.getViewModel().set('title', record.get('description'));
        this.getViewModel().set('status', record.get('status'));
    },

    toggleStatus: function (button){
        var record = this.getViewModel().get('record');
        var newStatus = !this.getViewModel().get('status');
        record.set('status', newStatus);
        this.getView().mask('Updating...');
        record.save({
            scope: this,
            callback: function (record, operation, success){
                if(success){
                    Ext.toast('Task status updated.', 'Status updated', 't');
                } else {
                    Ext.toast('There was an error updating the status.', 'Error', 't');
                }
                this.getViewModel().set('status', record.get('status'));
                this.getView().unmask();
            }
        });
    },

    onDestroy: function (){
        this.redirectTo('tasks');
    }

});
