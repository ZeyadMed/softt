<!DOCTYPE html>
<html>
<head>
    <title>تعديل بيانات الطالب</title>
</head>
<body>
    <h1>Edit Student information</h1>

    <h2>Update information:</h2>
    <form method="POST" action="/edit-student">
        @csrf
        <label for="name">Student Name:</label>
        <input type="text" name="name" value="{{ $student->name }}"><br>

        <label for="username">Username:</label>
        <input type="text" name="username" value="{{ $student->username }}"><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
