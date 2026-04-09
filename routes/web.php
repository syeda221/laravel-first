<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/add-student',[UserController::class,'add_student']);
Route::post('/save-student',[UserController::class,'save_student'])->name('adding');
Route::get('/show-student',[UserController::class,'showstudent']);
Route::get('edit-student/{id}',[UserController::class,'edit_student'])->name('edit.student');
// Route::delete('/delete-student/{id}',[UserController::class,'delete_student'])->name('delete.student');
Route::post('/update-student/{id}',[UserController::class,'update_student'])->name('student.update');

Route::get('/delete-student/{id}',[UserController::class,'delete_student'])->name('delete.student');


