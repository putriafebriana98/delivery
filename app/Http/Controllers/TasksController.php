<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    //
    public function index(){
        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));
    }
    public function task(Task $task) {
        return $task;
        return view('tasks.show',compact('task'));
    }
}
