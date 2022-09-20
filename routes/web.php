<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add',[StudentController::class,'create'])->name('student.add');
Route::post('/store',[StudentController::class,'store'])->name('student.store');
Route::get('/show',[StudentController::class,'index'])->name('student.show');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');