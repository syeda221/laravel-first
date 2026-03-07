<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add(){
        return view('Student.add_student');
    }
      public function save_student(Request $request){
       ddd($request);
    }
}
