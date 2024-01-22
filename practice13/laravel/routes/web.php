<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLTEController;
use App\Http\Controllers\AdminLTEStudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Student
Route::get('/student/create', [StudentController::class, 'create'])
    ->name('student.create')->middleware('login_auth');

Route::post('/student', [StudentController::class, 'store'])
    ->name('student.store')->middleware('login_auth');

Route::get('/student', [StudentController::class, 'index'])
    ->name('student.index')->middleware('login_auth');

Route::get('/student/{student}', [StudentController::class, 'show'])
    ->name('student.show')->middleware('login_auth');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])
    ->name('student.edit')->middleware('login_auth');

Route::patch('/student/{student}', [StudentController::class, 'update'])
    ->name('student.update')->middleware('login_auth');

Route::delete('/student/{student}', [StudentController::class, 'destroy'])
    ->name('student.destroy')->middleware('login_auth');

// Login
Route::get('/login', [AdminController::class, 'index'])
    ->name('login.index');

Route::get('/logout', [AdminController::class, 'logout'])
    ->name('login.logout');

Route::post('/login', [AdminController::class, 'process'])
    ->name('login.process');

// AdminLTE
// Route::get('/adminlte/index', 'AdminLTEController@index')
//     ->name('adminlte.index');

// that code above is not working, so i replace with this instead.
Route::get('/adminlte/beranda', [AdminLTEController::class, 'index'])
    ->name('adminlte.index');

Route::get('/adminlte/student/create', [AdminLTEStudentController::class, 'create'])
    ->name('adminlte.student.create');
