<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Models\Employee;

class employeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employee',compact('employees'));
    }

}
