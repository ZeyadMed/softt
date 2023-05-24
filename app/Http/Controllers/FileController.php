<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\File;

class FileController extends Controller
{
    public function create()
    {
        $subjects = Subject::all();
        return view('upload_file', compact('subjects'));
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('files'), $fileName);

        $data = [
            'subject_id' => $request->input('subject_id'),
            'file_name' => $fileName,
        ];

        File::create($data);
        return redirect('/departments');
    }

    public function downloadFiles(Subject $subject)
    {
    $files = $subject->files;
    $zipFile = public_path('files/'.$subject->name.'.zip');

    $zip = new \ZipArchive();
    if ($zip->open($zipFile, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
        foreach ($files as $file) {
            $filePath = public_path('files/'.$file->file_name);
            if (file_exists($filePath)) {
                $zip->addFile($filePath, $file->file_name);
            }
        }
        $zip->close();
    }

    return response()->download($zipFile, $subject->name.'.zip')->deleteFileAfterSend(true);
    }

    public function downloadFile(File $file)
    {
    $filePath = public_path('files/'.$file->file_name);
    return response()->download($filePath);
    }


}

