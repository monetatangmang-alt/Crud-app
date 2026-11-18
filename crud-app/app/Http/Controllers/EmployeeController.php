<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(){
        // ::all() គឺយក​ទិន្នន័យពី Database
        $employee = Employee::all();
        // ['employee'] => $employee] គឺយកតម្លៃពី Database​ ទៅកាន់់ View
        return view('employee.index', ['employee' => $employee]);
    }
    
    public function create(){
        return view('employee.create');
    }

    // dd = dum and die ប្រើសម្រាប់ debug និង print data terminate script 
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required|max:15',
            'salary' => 'required|numeric',
        ]);

        Employee::create($data);

        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee){
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required|max:10',
            'salary' => 'required|numeric',
        ]);
        $employee->update($data);
        return redirect(route('employee.index'));
    }

    public function destroy(Employee $employee){
        $employee->delete();
        return redirect(route('employee.index'));
    }
}