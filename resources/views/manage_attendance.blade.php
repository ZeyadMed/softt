<!DOCTYPE html>
<html>
<head>
    <title>Manage Attended</title>
</head>
<body>
    <h1>Manage Attended</h1>

    <h2>Manage Attended:</h2>
    <form method="POST" action="/attendance">
        @csrf
        <label for="subject_id">Subject:</label>
        <select name="subject_id">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select><br>

        <label for="absentees"> Attended:</label>
        <textarea name="absentees"></textarea><br>

        <button type="submit">Create absence statements</button>
    </form>

    <h2> absence statements:</h2>
    <ul>
        @foreach($attendances as $attendance)
            <li>{{ $attendance->subject->name }}</li>
            <ul>
                <li>Attended: {{ $attendance->absentees }}</li>
            </ul>
        @endforeach
    </ul>
</body>
</html>
