<!DOCTYPE html>
<html>
<head>
    <title>Download File</title>
</head>
<body>
    <h1>Download Files</h1>

    <h2>Download File:</h2>
    <form method="POST" action="/upload-file" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose File:</label>
        <input type="file" name="file"><br>

        <label for="subject_id">Subjrct:</label>
        <select name="subject_id">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Download</button>
    </form>

    <h2>Files List:</h2>
    <ul>
        @foreach($files as $file)
            <li>{{ $file->original_name }} ({{ $file->subject->name }})</li>
        @endforeach
    </ul>
</body>
</html>
