<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\AttendanceSheet;

class AttendanceSheetController extends Controller
{
    public function create()
    {
        $subjects = Subject::all();
        return view('create_attendance_sheet', compact('subjects'));
    }

    public function store(Request $request)
    {
        AttendanceSheet::create($request->all());
        return redirect('/departments');
    }
}

