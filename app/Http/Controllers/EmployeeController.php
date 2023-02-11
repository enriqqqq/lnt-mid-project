<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{   
    // Get all entries
    public function index(){
        return view('index', [
            'employees' => Employee::all()
        ]);
    }

    // Show single listing
    public function show($id){
        return view('show', [
            'employee' => Employee::find($id)
        ]);
    }

    // Create entry
    public function create(){
        return view('create');
    }

    // Update entry
    public function update(Request $request, Employee $employee){
        $formFields = $request->validate([
            'name' => ['required', 'between:5, 20'],
            'age' => ['required', 'gt:20'],
            'address' => ['required', 'between:10, 40'],
            'phone_number' => ['required', 'regex:/^08[0-9]*$/']
        ]);

        $employee->update($formFields);
        return redirect('/');
    }
    
    // Store entry
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'between:5, 20'],
            'age' => ['required', 'gt:20'],
            'address' => ['required', 'between:10, 40'],
            'phone_number' => ['required', 'regex:/^08[0-9]*$/']
        ]);

        Employee::create($formFields);
        return redirect('/');
    }

    // Delete entry
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect('/');
    }
}
