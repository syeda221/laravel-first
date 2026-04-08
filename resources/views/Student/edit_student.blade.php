<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit student</title>
</head>
<body>
    <h1>Edit Details</h1>
    <form action="{{ route('student.update', $student_details->id) }}" method="post">
        @csrf
                Name:  <br>
        <input type="text" name="name" value="{{ $student_details->name }}"><br><br>        Email:  <br>
        <input type="text" name="email" value="{{ $student_details->email }}">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>