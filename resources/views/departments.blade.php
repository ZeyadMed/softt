<!DOCTYPE html>
<html>
<head>
    <title> Department management</title>
</head>
<body>
    <h1> Department management</h1>

    <form method="POST" action="/departments">
        @csrf
        <label for="name">Department Name:</label>
        <input type="text" name="name"><br>

        <label for="code"> Department ID:</label>
        <input type="text" name="code"><br>

        <button type="submit">Add department </button>
    </form>

    <h2> Department List</h2>
    <ul>
        @foreach($departments as $department)
            <li>{{ $department->name }} - {{ $department->code }}</li>
        @endforeach
    </ul>
    @foreach($departments as $department)
    <li>{{ $department->name }} - {{ $department->code }}</li>
    <ul>
        @foreach($department->subjects as $subject)
            <li>{{ $subject->name }} - {{ $subject->code }}</li>
        @endforeach
    </ul>
@endforeach

@foreach($department->subjects as $subject)
    <li>{{ $subject->name }} - {{ $subject->code }}</li>
    <ul>
        @foreach($subject->accounts as $account)
            <li>{{ $account->username }} - {{ $account->password }}</li>
        @endforeach
    </ul>
@endforeach

@foreach($department->subjects as $subject)
    <li>{{ $subject->name }} - {{ $subject->code }}</li>
    <ul>
        @foreach($subject->attendanceSheets as $attendanceSheet)
            <li>{{ $attendanceSheet->date }}</li>
        @endforeach
    </ul>
    <a href="/create-attendance-sheet">Create absence statements</a>
@endforeach

@foreach($department->subjects as $subject)
    <li>{{ $subject->name }} - {{ $subject->code }}</li>
    <ul>
        @foreach($subject->attendanceSheets as $attendanceSheet)
            <li>{{ $attendanceSheet->date }}</li>
        @endforeach
    </ul>
    <a href="/upload-file">Upload File</a>
@endforeach

@foreach($department->subjects as $subject)
    <li>{{ $subject->name }} - {{ $subject->code }}</li>
    <ul>
        @foreach($subject->attendanceSheets as $attendanceSheet)
            <li>{{ $attendanceSheet->date }}</li>
        @endforeach
    </ul>
    <a href="/download-files/{{ $subject->id }}">Download File</a>
@endforeach

@foreach($department->subjects as $subject)
    <li>{{ $subject->name }} - {{ $subject->code }}</li>
    <ul>
        @foreach($subject->attendanceSheets as $attendanceSheet)
            <li>{{ $attendanceSheet->date }}</li>
        @endforeach
    </ul>
    <a href="/create-student">إنشاء حساب طالب</a>
@endforeach



</body>
</html>
