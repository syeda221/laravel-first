<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    @foreach($students as $student)




        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
           <td>{{$student->email}}</td>
    <td><form action="{{ route('delete.student', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are You Sure?')">Delete</button>
    </form></td>
           
           <td><a href="{{route('edit.student' , $student->id)}}">edit</a></td>
           <td></td>
        </tr>
        @endforeach
    </table>

</body>
</html> 