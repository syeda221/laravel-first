<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
  public function save_student(Request $request){
    Student::create([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect("/show-student");
}

public function show_student()
{
    $students = Student::all();
    return view('Student.show_student', compact('students'));
}

public function edit_student($id)
{
    $student_details = Student::find($id);
    return view('Student.edit_student', compact('student_details'));
}
}
