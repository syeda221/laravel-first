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
        return "studnet added";
    }
}
