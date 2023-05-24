<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments', compact('departments'));
    }

    public function store(Request $request)
    {
        Department::create($request->all());
        return redirect('/departments');
    }
}

