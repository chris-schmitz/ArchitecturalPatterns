@extends('base.vue')

@section('after-scripts')
    <script type="text/javascript">

        new Vue({
            el: '#app',

            data:{
                test: 'worked'
            }
        });
    </script>
@stop

@section('content')
<div class="panel panel-primary">

    @{{ test }}

    <div class="panel-heading">
        <h2>Tasks</h2>
    </div>
    <div class="panel-body">
        <table class="table">
            <tr>
                <th>
                    Task
                </th>
                <th>
                    Status
                </th>
            </tr>

            {{-- @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->description }}
                    </td>
                    <td>
                            <button
                                type="submit"
                                class="btn status-btn
                                    {{ $task->status == 'Complete' ? 'btn-success' : 'btn-danger'}}"
                                name="status"
                                value="{{ $task->status }}"
                                >{{ $task->status }}</button>
                    </td>
                </tr>
            @endforeach --}}
        </table>
    </div>
</div>
@stop
