<?php

namespace App\Http\Controllers\MVCVM;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;


/**
 * Note that THIS IS NOT OPTIMIZED CODE!
 * methods have not been abstracted and subclasses have not been created so that
 * this _demo_ project is easier to read, method by method, without hopping
 * around a lot in the editor.
 */
class TaskController extends Controller
{
    protected $tasks;
    protected $request;

    public function __construct(Task $tasks, Request $request)
    {
        $this->tasks = $tasks;
        $this->request = $request;
    }

    public function index()
    {
        $tasks = $this->tasks->all();
        // come back and get total complete and total in progress
        return ['status' => 'success', 'message' => null, 'data' => $tasks];
    }

    public function show($id){
        $task = $this->tasks->findOrFail($id);

        return ['status' => 'success', 'message' => null, 'data' => $task];
    }

    public function update(Request $request, $id)
    {
        $task = $this->tasks->findOrFail($id);

        // note that we're no longer handling the status toggle here, we're just
        // accepting the new status handed to us by the client. We're handling
        // the presentation of state to the user on the client side now, so
        // our API can just accept the data and handle the persistance of it.
        $task->status = $request->get('status');
        $task->save();

        return ['status' => 'success', 'message' => 'Task Updated.', 'data' => $task];
    }
}
