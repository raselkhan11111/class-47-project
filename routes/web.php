<?php

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







use App\Http\Controllers\CourseController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
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

// Route::get('/', [ProductController::class, 'index'])->name('product.index');
// Route::prefix('product')->group(function () {
//     Route::get('/create', [ProductController::class, 'create'])->name('product.create');
//     Route::post('/store', [ProductController::class, 'store'])->name('product.store');
//     Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
//     Route::patch('/update/{id}', [ProductController::class, 'update'])->name('product.update');
//     Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
// });
Route::resource('product',ProductController::class);
// student..........................
Route::prefix('student')->group(function () {
    Route::get('/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/index', [StudentController::class, 'index'])->name('student.index');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::patch('/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
});
// course...................
Route::prefix('course')->group(function () {
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/index', [CourseController::class, 'index'])->name('course.index');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::patch('/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('course.delete');
});
// patiend.......................
Route::prefix('patient')->group(function () {
    Route::get('/create', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/store', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/index', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::patch('/update/{id}', [PatientController::class, 'update'])->name('patient.update');
    Route::get('/delete/{id}', [PatientController::class, 'destroy'])->name('patient.delete');
});
// lab...................
Route::prefix('lab')->group(function () {
    Route::get('/create', [LabController::class, 'create'])->name('lab.create');
    Route::post('/store', [LabController::class, 'store'])->name('lab.store');
    Route::get('/index', [LabController::class, 'index'])->name('lab.index');
    Route::get('/edit/{id}', [LabController::class, 'edit'])->name('lab.edit');
    Route::patch('/update/{id}', [LabController::class, 'update'])->name('lab.update');
    Route::get('/delete/{id}', [LabController::class, 'destroy'])->name('lab.delete');
});
// order..............

Route::prefix('order')->group(function () {
    Route::get('/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('order.create');
    Route::post('/store', [OrderController::class, 'store'])->name('order.store');
    Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
    Route::patch('/update/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');
});
