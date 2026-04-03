<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function add_student(){
        return view('Student.add_student');
    }
  public function save_student(Request $request){
    Student::create([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect("/show-student");
}

public function showstudent()
{
    $students = Student::all();
    return view('Student.show_student', compact('students'));
}

public function edit_student($id)
{
    $student_details = Student::find($id);
    return view('Student.edit_student', compact('student_details'));
}
public function delete_student($id){
    Student::destroy($id);
    return redirect('/show-student');

}
}
