<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $Request)
    {
        $input = $Request->all();
        $Request->validate([
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

    public function get(){

        $tasks = DB::table('tasks')
        ->get();

        return view('dashboard', compact('tasks'));
    }

    public function update(){

    }


}
