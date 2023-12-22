<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::OrderBy('id', 'DESC')
                    ->paginate(10);

        return view('admin.employee.index',[
            'pagetitle' => 'Employee',
            'title' => 'Employee | Admin',
            'employees' =>  $employees  
        ]);
    }
    public function create()
    {
        return view('admin.employee.create',[
            'pagetitle' => 'Add Employee',
            'title' => 'Employee | Admin'
        ]);
    }
    public function store(Request $request)
    {
        $saveemployee = new Employee;
        $saveemployee->name = $request->name;
        $saveemployee->position = $request->position;
        
        if ($saveemployee->save()) {
            return redirect()->back();
        }
    }
    
}
