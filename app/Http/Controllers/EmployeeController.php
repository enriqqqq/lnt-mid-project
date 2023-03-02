<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{   
    // Get all entries
    public function index(){
        return view('index', [
            'employees' => Employee::latest()->filter(request(['search']))->get()
        ]);
    }

    // Show single listing
    public function show($id){
        return view('show', [
            'employee' => Employee::find($id),
            'next' => Employee::where('id', '>' , $id)->orderBy('id')->first(),
            'prev' => Employee::where('id', '<' , $id)->orderBy('id', 'desc')->first()
        ]);
    }

    // Create entry
    public function create(){
        return view('create');
    }

    // Update entry
    public function update(Request $request, Employee $employee){
        $formFields = $request->validate([
            'name' => ['between:5, 20'],
            'age' => ['gt:20'],
            'address' => ['between:10, 40'],
            'phone_number' => ['regex:/^08[0-9]{0,12}$/']
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $employee->update($formFields);
        return redirect('/employees/' . $employee->id)->with('message', 'Entry sucessfully updated.');
    }
    
    // Store entry
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'between:5, 20'],
            'age' => ['required', 'gt:20'],
            'address' => ['required', 'between:10, 40'],
            'phone_number' => ['required', 'regex:/^08[0-9]{0,12}$/']
        ]);

        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Employee::create($formFields);
        return redirect('/')->with('message', 'Entry sucessfully created.');
    }

    // Delete entry
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect('/')->with('message', 'Entry sucessfully deleted.');
    }
}
