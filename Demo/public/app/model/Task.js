Ext.define('Tasker.model.Task', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int' },
        { name: 'description', type: 'string' },
        { name: 'status', type: 'boolean' }
    ],
    proxy:{
        type: 'rest',
        url: 'mvcvm/tasks',
        reader:{
            type: 'json',
            rootProperty: 'data'
        }
    }
});
