<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>

    <h2>Student information:</h2>
    <ul>
        <li>Student Name: {{ $student->name }}</li>
        <li>Student ID: {{ $student->id }}</li>
        <li>Username: {{ $student->username }}</li>
        <li>Password: {{ $student->password }}</li>
        <li>Department: {{ $student->department->name }}</li>
    </ul>
</body>
</html>
