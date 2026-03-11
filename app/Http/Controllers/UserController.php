<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add_student(){
        return view('Student.add_student');
    }
      public function save_student(Request $request){
       dd($request);
    }
}
