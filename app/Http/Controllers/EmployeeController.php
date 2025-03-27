<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    
    public function index(): View
    {
        $employees = Employee::query()
            ->latest()
            ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    
    public function create(): View
    {
        return view('employees.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6',
        ]);
    
        Employee::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash password
        ]);
    
        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }
    
    
    
    public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('employees.edit', compact('employee'));
}

    
public function update(Request $request, $id)
{
    // Step 1: Validate Request Data
    $request->validate([
        'name'     => 'required|string|max:255',
        'role'     => 'required|string|max:255',
        'email'    => 'required|email|unique:employees,email,' . $id,
    ]);

    // Step 2: Find Employee & Update
    $employee = Employee::findOrFail($id);
    $employee->update([
        'name'  => $request->name,
        'role'  => $request->role,
        'email' => $request->email,
    ]);

    // Step 3: Redirect to Employees List
    return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
}

    
    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();

        return redirect()
            ->back()
            ->with('success', __('Employee deleted successfully.'));
    }
}