Ext.define("Tasker.view.tasks.grid.Tasks",{
    extend: "Ext.grid.Panel",
    xtype: 'tasksgrid',

    requires: [
        "Tasker.view.tasks.grid.TasksController",
        "Tasker.view.tasks.grid.TasksModel"
    ],

    controller: "tasks-grid-tasks",
    viewModel: {
        type: "tasks-grid-tasks"
    },

    bind: {
        store: '{tasks}'
    },

    autoLoad: true,
    listeners:{
        itemclick: 'onRowClick'
    },

    columns:[
        {
            text: 'Task',
            dataIndex: 'description',
            flex: 1
        },
        {
            text: 'Status',
            dataIndex: 'status',
            align: 'center',
            renderer: function (value){
                return value == true ? 'Complete' : 'In Progress';
            }
        }
    ]
});
