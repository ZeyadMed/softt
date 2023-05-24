<!DOCTYPE html>
<html>
<head>
    <title>Create absence statements </title>
</head>
<body>
    <h1>Create absence statements</h1>

    <form method="POST" action="/attendance-sheets">
        @csrf
        <label for="subject"> Choose Subject:</label>
        <select name="subject_id">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select><br>

        <label for="date">Absence Date:</label>
        <input type="date" name="date"><br>

        <button type="submit">ٍSave</button>
    </form>
</body>
</html>
