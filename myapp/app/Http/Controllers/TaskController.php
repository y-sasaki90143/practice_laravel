<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;  //この記述をすることでTaskモデルを使うときにTaskとして扱える
//記述がない場合だとApp\Taskと書かなければならない

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->name = request('name');
        $task->save();
        return redirect('/tasks');
    }

    public function destroy(Request $request, $id, Task $task)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
}
