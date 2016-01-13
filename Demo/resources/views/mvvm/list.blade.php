@extends('base.vue')

@section('after-scripts')
    <script type="text/javascript">

        Vue.component('task-grid',{
            template: '#task-grid',
            props: [
                'tasks'
            ],
            methods:{
                toggleStatus: function (task){
                    debugger; // intensionally left in so we can look at what's happening
                    task.status = !task.status;
                }
            }
        });

        new Vue({
            el: '#app',
            data:{
                tasks: [
                    {id: 1, description: 'Pick up groceries', status: true},
                    {id: 2, description: 'Go to the doctor', status: false},
                    {id: 3, description: 'Mow the lawn', status: true},
                    {id: 4, description: 'Play the video game', status: false},
                    {id: 5, description: 'Call your parents', status: true},
                    {id: 6, description: 'Cook dinner', status: false}
                ]
            }
        });
    </script>
@stop

@section('templates')

    <template id="task-grid">
        <table class="table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="task in tasks">
                    <td>
                        @{{ task.description }}
                    </td>
                    <td>
                        <button
                            class="btn status-btn"

                            :class="{ 'btn-success' : task.status == true, 'btn-danger' : task.status !== true}"
                            {{-- note that this is NOT a teranary, it's two sepsarete if's being evaluated --}}
                            {{-- i.e. while these two checks look like they're linked because they're both based
                                on the same boolean, they are not. --}}

                            {{-- e.g. in the case below, both the 'btn-success' and 'btn-danger' classes would be applied --}}
                            {{-- :class="{ 'btn-success' : 1 === 1, 'btn-danger' : task.status === task.status}" --}}

                            @click="toggleStatus(task)"
                        >
                            @{{ task.status == true ? 'Completed' : 'In Progress' }}
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </template>
@stop


@section('content')
    <div class="panel panel-primary">

        <div class="panel-heading">
            <h2>Tasks</h2>
        </div>
        <div class="panel-body">
            <task-grid :tasks="tasks">
        </div>

    </div>
@stop
