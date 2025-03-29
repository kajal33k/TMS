<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     *
     * @return View
     */
    public function index(): View
    {
        $employees = Employee::query()
            ->latest()
            ->paginate(10);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new employee.
     *
     * @return View
     */
    public function create(): View
    {
        return view('employees.create');
    }

    /**
     * Store a newly created employee in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $employee = Employee::create([
            'name' => $validatedData['name'],
            'role' => $validatedData['role'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json([
            'message' => 'Employee created successfully',
            'data' => $employee
        ], 201);
    }

    /**
     * Show the form for editing the specified employee.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified employee in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($validatedData);

        return redirect()
            ->route('employees.index')
            ->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified employee from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();

        return redirect()
            ->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}