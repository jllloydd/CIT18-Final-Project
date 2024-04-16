<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'task' =>'required|string|max:255',
            'date' =>'required|date',
            'time' =>'required|string|max:255',
            'desc' =>'required|string|max:999',

        ]);
        tasks::create([
            'task' => $input['task'],
            'date' => $input['date'],
            'time' => $input['time'],
            'desc' => $input['desc'],

        ]);
        return redirect()->route('dashboard')->with('status', 'New task created successfully!');
    }

    public function update(Request $request, $id)
{
    $task = tasks::find($id); 
    $task->update($request->all());
    return redirect()->route('dashboard')->with('status', 'Task edited successfully!');
}


    public function get(){

        $tasks = DB::table('tasks')
        ->get();

        return view('dashboard', compact('tasks'));
    }


    public function delete($id)
{
    $task = tasks::find($id);
    
    if($task) {
        $task->delete();
        return redirect()->route('dashboard')
            ->with('status', 'Task deleted successfully!');
    }
    return redirect()->route('dashboard')
            ->with('status', 'Task not found!');
}
}

