<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h1>Upload File</h1>

    <form method="POST" action="/upload-file" enctype="multipart/form-data">
        @csrf
        <label for="subject">Choose Subject:</label>
        <select name="subject_id">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select><br>

        <input type="file" name="file"><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
