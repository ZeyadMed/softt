<!DOCTYPE html>
<html>
<head>
    <title>Manage Subjects</title>
</head>
<body>
    <h1>Manage Subjects</h1>

    <h2>Add New Subject:</h2>
    <form method="POST" action="/subjects">
        @csrf
        <label for="subject_name">Subject Name:</label>
        <input type="text" name="subject_name"><br>

        <label for="subject_code">Subject ID:</label>
        <input type="text" name="subject_code"><br>

        <label for="department_id">Department:</label>
        <select name="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">ADD SUBJECT</button>
    </form>

    <h2>Subject List:</h2>
    <ul>
        @foreach($subjects as $subject)
            <li>{{ $subject->name }} - {{ $subject->code }} ({{ $subject->department->name }})</li>
        @endforeach
    </ul>
</body>
</html>
