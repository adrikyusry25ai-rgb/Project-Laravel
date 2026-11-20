<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::post('/admin/students', [StudentController::class, 'store'])->name('admin.student.store');
Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.student.index');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom.index');
Route::post('/admin/classroom', [ClassroomController::class, 'store'])->name('admin.classroom.store');

Route::get('/admin/teachers', [TeachersController::class, 'index'])->name('admin.teacher.index');
Route::post('/admin/teachers', [TeachersController::class, 'store'])->name('admin.teacher.store');

Route::get('/admin/subjects', [SubjectsController::class, 'index'])->name('admin.subject.index');
Route::post('/admin/subjects', [SubjectsController::class, 'store'])->name('admin.subject.store');

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);


// Route::get('/admin/classroom', [ClassroomController::class, 'index']);

// Route::get('/admin/teachers', [TeachersController::class, 'index']);

// Route::get('/admin/subjects', [SubjectsController::class, 'index']);
