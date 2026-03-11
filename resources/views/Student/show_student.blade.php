<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student</title>
</head>
<body>
    @foreach($students as $student)
{{student->name }}
@endforeach;
</body>
</html>