<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit student</title>
</head>
<body>
    <h1>Edit Details</h1>
    <form action="/update-student/{{ $student_details->id }}" method="post">
                Name:  <br>
        <input type="text" value="{{ $student_details->name }}"><br><br>        Email:  <br>
        <input type="text" value="{{ $student_details->email }}">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>