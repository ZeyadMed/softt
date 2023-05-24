<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Subject;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        $subjects = Subject::all();
        return view('upload_files', compact('files', 'subjects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'file' => 'required|mimes:pdf',
            'subject_id' => 'required',
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $originalName);

        $data['original_name'] = $originalName;

        File::create($data);
        return redirect('/upload-files');
    }
}

