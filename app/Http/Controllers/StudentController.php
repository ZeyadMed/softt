<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('create_student');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:students',
            'password' => 'required',
            'id' => 'required|unique:students',
        ]);

        $data['password'] = bcrypt($data['password']);

        Student::create($data);
        return redirect('/departments');
    }

    public function dashboard()
    {
    $student = auth()->user();
    return view('student_dashboard', compact('student'));
    }

    public function profile()
    {
        $student = Student::find(auth()->user()->id);
        return view('student_profile', compact('student'));
    }

    public function edit()
    {
        $student = Student::find(auth()->user()->id);
        return view('edit_student', compact('student'));
    }

    public function update(Request $request)
    {
        $student = Student::find(auth()->user()->id);

        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'nullable',
        ]);

        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }

        $student->update($data);

        return redirect('/edit-student')->with('success', 'تم تحديث البيانات بنجاح.');
    }

}

