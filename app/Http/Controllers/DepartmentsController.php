<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('manage_departments', compact('departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'department_name' => 'required|unique:departments,name',
            'department_code' => 'required|unique:departments,code',
        ]);

        Department::create($data);
        return redirect('/manage-departments');
    }
}

