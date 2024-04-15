<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'task' =>'required|string|max:255',
            'date' =>'required|date',
            'time' =>'required|string|max:255',
            'description' =>'required|string|max:999',

        ]);
        tasks::create([
            'task' => $input['task'],
            'task_date' => $input['date'],
            'task_time' => $input['time'],
            'desc' => $input['description'],

        ]);
        return redirect()->route('dashboard')->with('status', 'New task created successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task' =>'required|string|max:255',
            'date' =>'required|date',
            'time' =>'required|string|max:255',
            'description' =>'required|string|max:999',

        ]);
        $tasks = tasks::find($id);
        $tasks->update($request->all());
        return redirect()->route('dashboard')->with('status', 'Task updated successfully');
    }

    public function delete(Request $request, $id)
    {
        $request->validate([
            'task' =>'required|string|max:255',
            'date' =>'required|date',
            'time' =>'required|string|max:255',
            'description' =>'required|string|max:999',

        ]);
        $tasks = tasks::find($id);
        $tasks->delete();
        return redirect()->route('dashboard')->with('status', 'Task deleted');
    }
}
