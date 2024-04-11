<?php

namespace App\Http\Controllers\boilerplate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $employees = Employee::get();
        return view('boilerplate.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('boilerplate.employee.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->firstname = $request['firstname'];
        $employee->lastname = $request['lastname'];
        $employee->date_of_birth = $request['date_of_birth'];
        $employee->education_qualification = $request['education_qualification'];
        $employee->address = $request['address'];
        $employee->phone = $request['phone'];
        $employee->email = $request['email'];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images/photo', $filename);
            
            $employee->photo = $filePath;
        }
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images/resume', $filename);
            
            $employee->resume = $filePath;
        }
        $employee->save();
        
        return redirect()->route('employee.index')->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::where('id', $id)->first();
        return view('boilerplate.employee.edit', compact('employee')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditEmployeeRequest $request, string $id)
    {
        $employee = Employee::where('id', $id)->first();
        $employee->firstname = $request['firstname'];
        $employee->lastname = $request['lastname'];
        $employee->date_of_birth = $request['date_of_birth'];
        $employee->education_qualification = $request['education_qualification'];
        $employee->address = $request['address'];
        $employee->phone = $request['phone'];
        $employee->email = $request['email'];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images/photo', $filename);
            
            $employee->photo = $filePath;
        }
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('images/resume', $filename);
            
            $employee->resume = $filePath;
        }
        $employee->save();
        
        return redirect()->route('employee.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::where('id', $id)->delete();

        return redirect()->route('employee.index')->with('success', 'Record deleted successfully.');
    }
}
