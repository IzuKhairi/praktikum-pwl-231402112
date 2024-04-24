<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Fetch all tasks

        return view('home', [
            'tasks' => $tasks, // Pass the tasks variable to the view
        ]);
    }

    public function tambah(Request $request)
    {
        $request->validate(
            [
            'task' => 'required|string|min:5', 
        ]);

        Task::create([
            'task' => $request-> task,
            'tanggal' => NOW(), // Make sure your database column can store timestamps
        ]);

        return redirect('/');
    }

    public function deleteTask(Request $request)
    {
        Task::where('id', $request->id)->delete();
        return redirect('/');
    }
}
