<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.index',[
            'pagetitle' => 'Employee',
            'title' => 'Employee | Admin'
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
        $saveemployee = new employee;
        $saveemployee->name = $request->name;
        
        if ($saveemployee->save()) {
            return redirect()->back();
        }
    }
    
}
