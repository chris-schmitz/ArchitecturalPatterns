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
    resizeable: true,
    height: 200,
    width: 500,
    bodyPadding:10,
    bind:{
        title: 'Task: <b>{title}</b>',
    },
    listeners:{
        loadRecord: 'onLoadRecord',
        destroy: 'onDestroy'
    },

    dockedItems:{
        xtype: 'toolbar',
        dock: 'bottom',
        ui: 'footer',
        items:[
            "->",
            {
                xtype: 'component',
                html: 'Status'
            },
            {
                xtype: 'button',
                // name: 'status',
                fieldLabel: 'Status',
                bind:{
                    text: '{statusDisplay}'
                },
                handler: 'toggleStatus'
            }
        ]
    },


    items:[
        {
            xtype: 'form',
            reference: 'taskform',
            layout: 'anchor',
            items:[
                {
                    xtype: 'textfield',
                    name: 'description',
                    fieldLabel: 'Description',
                    anchor: '100%',
                    bind:{
                        value: '{record.description}'
                    }
                }
            ]
        }
    ]
});
