<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Employee;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('employee')->latest()->get();
        $employees = Employee::all();
        return view('tasks.index', compact('tasks', 'employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'employee_id' => 'nullable|exists:employees,id',
        ]);

        Task::create([
            'title' => $request->title,
            'employee_id' => $request->employee_id,
            'assigned_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Task assigned successfully!');
    }

    public function update(Task $task)
    {
        if ($task->progress === 'Not Started') {
            $task->update(['progress' => 'In Progress']);
        } elseif ($task->progress === 'In Progress') {
            $task->update(['progress' => 'Completed', 'is_completed' => true, 'completed_at' => now()]);
        }

        return redirect()->back()->with('success', 'Task progress updated.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully.');
    }
}
