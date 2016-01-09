Ext.define("Tasker.view.tasks.window.Task",{
    extend: "Ext.window.Window",
    xtype: 'taskwindow',

    requires: [
        "Tasker.view.tasks.window.TaskController",
        "Tasker.view.tasks.window.TaskModel"
    ],

    controller: "tasks-window-task",
    viewModel: {
        type: "tasks-window-task"
    },

    modal: true,
    height: 300,
    width: 500,
    bodyPadding:10,
    bind:{
        title: 'Task: <b>{title}</b>',
    },
    listeners:{
        loadRecord: 'onLoadRecord',
        destroy: 'onDestroy'
    },

    items:[
        {
            xtype: 'form',
            reference: 'taskform',
            items:[
                {
                    xtype: 'textfield',
                    name: 'description',
                    fieldLabel: 'Description'
                },
                {
                    xtype: 'textfield',
                    name: 'status',
                    fieldLabel: 'Status'
                },
            ]
        }
    ]
});
