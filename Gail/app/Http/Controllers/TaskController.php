<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all(); // Return all tasks as JSON
    }

    public function create()
    {
        return view('tasks.create'); // Show a form to create a task
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return redirect()->route('tasks.index'); // Redirect to task list
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task')); // Show a single task
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task')); // Show edit form
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
