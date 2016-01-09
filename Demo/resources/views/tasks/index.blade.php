@extends('base.default')

@section('content')

    <div class="panel panel-primary">
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
                @foreach($tasks as $task)
                    <tr>
                        <td>
                            {{ $task->description }}
                        </td>
                        <td>
                            <form class="form" action="{{ route('mvc.tasks.update', $task->id) }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name = '_method' value="PATCH">
                                <button
                                    type="submit"
                                    class="btn status-btn
                                        {{ $task->status == 'Complete' ? 'btn-success' : 'btn-danger'}}"
                                    name="status"
                                    value="{{ $task->status }}"
                                    >{{ $task->status }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
