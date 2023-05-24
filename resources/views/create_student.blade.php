<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    <form method="POST" action="/students">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br>

        <label for="id">ID:</label>
        <input type="text" name="id"><br>

        <button type="submit">Create Account</button>
    </form>
</body>
</html>
