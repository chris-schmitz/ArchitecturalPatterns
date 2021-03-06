<?php

namespace App\Http\Controllers\MVC;

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
        return view('mvc.index', compact('tasks'));
    }

    public function update(Request $request, $id)
    {
        $task = $this->tasks->findOrFail($id);

        if ($request->get('status') == true) {
            $task->markIncomplete();
        } else {
            $task->markComplete();
        }
        $task->save();

        $tasks = $this->tasks->all();
        return view('mvc.index', compact('tasks'));
    }
}
