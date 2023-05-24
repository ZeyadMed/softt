<!DOCTYPE html>
<html>
<head>
    <title>Manage Department</title>
</head>
<body>
    <h1>Manage Department</h1>

    <h2>Add New Department:</h2>
    <form method="POST" action="/departments">
        @csrf
        <label for="department_name">Department Name:</label>
        <input type="text" name="department_name"><br>

        <label for="department_code">Department ID:</label>
        <input type="text" name="department_code"><br>

        <button type="submit">Submit</button>
    </form>

    <h2>Departments List:</h2>
    <ul>
        @foreach($departments as $department)
            <li>{{ $department->name }} - {{ $department->code }}</li>
        @endforeach
    </ul>
</body>
</html>
