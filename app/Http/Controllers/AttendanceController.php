<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Subject;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        $subjects = Subject::all();
        return view('manage_attendance', compact('attendances', 'subjects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject_id' => 'required',
            'absentees' => 'required',
        ]);

        Attendance::create($data);
        return redirect('/manage-attendance');
    }
}

