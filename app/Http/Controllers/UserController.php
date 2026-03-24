<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function add_student(){
        return view('Student.add_student');
    }
      public function save_student(Request $request){
        student::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        // return "student added";
        return redirect("/show-student");
    }
    public function show_student()
{
    $students = Student::all();

    return view('Student.show_student', compact('students'));
}
}
