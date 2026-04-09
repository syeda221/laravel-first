<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //add function 
    public function add_student(){
        return view('Student.add_student');
    }
    //save function
  public function save_student(Request $request){
    Student::create([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect("/show-student");
}
//fetch function
public function showstudent()
{
    $students = Student::all();
    // return view('Student.show_student', compact('students'));
    return response()->json($students);
}

//delete fucntion
public function delete_student($id){
    Student::destroy($id);
    return redirect('/show-student');

}
//edit function
public function edit_student($id)
{
    $student_details = Student::find($id);
    return view('Student.edit_student', compact('student_details'));
}
//update function
public function update_student(Request $request, $id){
    $student = Student::find($id);
   $newdata=  Student::where('id',$id)->update([
    'name'=>$request->name ?? $student->name
    ,'email'=>$request->email ?? $student->email
    ]);
    return redirect('/show-student');

}
}
