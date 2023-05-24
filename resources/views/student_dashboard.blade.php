<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard of Student</h1>

    <h2>registered Subject:</h2>
    <ul>
        @foreach($student->subjects as $subject)
            <li>{{ $subject->name }} - {{ $subject->code }}</li>
            <ul>
                @foreach($subject->files as $file)
                    <li><a href="/download-file/{{ $file->id }}">{{ $file->file_name }}</a></li>
                @endforeach
            </ul>
        @endforeach
    </ul>

    <h2>Subject:</h2>
<ul>
    <li><a href="/upload-files">download-file</a></li>
</ul>

<h2>Subject:</h2>
<ul>
    <li><a href="/student-profile">Personal data</a></li>
</ul>

<h2>Subject:</h2>
<ul>
    <li><a href="/edit-student">Edit Data</a></li>
</ul>



</body>
</html>
