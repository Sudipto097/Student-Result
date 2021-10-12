<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get("/",HomeController::class)->name('home');
Route::get("single-student/{id}",[HomeController::class,'singleStudent'])->name('student.single');

Route::resource('students', StudentsController::class);
Route::resource('subject', SubjectController::class);

Route::get("subject_add",[ReportController::class,'subjectAdd'])->name('subject.add');
Route::post("add_subject",[ReportController::class,'store'])->name('add.subject');
