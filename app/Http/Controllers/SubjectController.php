<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Department;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $departments = Department::all();
        return view('manage_subjects', compact('subjects', 'departments'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject_name' => 'required|unique:subjects,name',
            'subject_code' => 'required|unique:subjects,code',
            'department_id' => 'required',
        ]);

        Subject::create($data);
        return redirect('/manage-subjects');
    }
}

