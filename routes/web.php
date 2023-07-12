<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ManagementuserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// grup untuk user yg sudah terautentikasi dan role dosen
Route::group(['middleware' => ['auth', 'role:admin']], function() {

    //untuk menampilkan Form tambah course
    Route::get('/course/create', [CourseController::class, 'create']);

    //root untuk memproses form tambah course
    Route::post('/course', [CourseController::class, 'store']);

    //Route untuk menghapus data course
    Route::delete('/course', [CourseController::class, 'destroy']);

    //Route untuk menampilkan form edit course
    Route::get('/course/edit/{id}', [CourseController::class, 'edit']);

    //Route untukuntuk memproses form edit course
    Route::put('/course/{id}', [CourseController::class, 'update']);



    //untuk menampilkan Form tambah lecturer
    Route::get('/lecturer/create', [LecturerController::class, 'create']);

    //root untuk memproses Form tambah lecturer
    Route::post('/lecturer', [LecturerController::class, 'store']);

    //Route untuk menghapus data lecturer
    Route::delete('/lecturer', [LecturerController::class, 'destroy']);


    //Route untuk menampilkan form edit lecturer
    Route::get('/lecturer/edit/{id}', [LecturerController::class, 'edit']);

    //Route untukuntuk memproses form edit lecturer
    Route::put('/lecturer/{id}', [LecturerController::class, 'update']);



    //untuk menampilkan Form tambah student
    Route::get('/student/create', [StudentController::class, 'create']);

    //root untuk memproses Form tambah student
    Route::post('/student', [StudentController::class, 'store']);

    //Route untuk menghapus data student
    Route::delete('/student', [StudentController::class, 'destroy']);


    //Route untuk menampilkan form edit student
    Route::get('/student/edit/{id}', [StudentController::class, 'edit']);

    //Route untukuntuk memproses form edit student
    Route::put('/student/{id}', [StudentController::class, 'update']);




    //untuk menampilkan Form tambah student
    Route::get('/managementuser/create', [ManagementuserController::class, 'create']);

    //root untuk memproses Form tambah managementuser
    Route::post('/managementuser', [ManagementuserController::class, 'store']);

    //Route untuk menghapus data managementuser
    Route::delete('/managementuser', [ManagementuserController::class, 'destroy']);


    //Route untuk menampilkan form edit managementuser
    Route::get('/managementuser/edit/{id}', [ManagementuserController::class, 'edit']);

    //Route untukuntuk memproses form edit managementuser
    Route::put('/managementuser/{id}', [ManagementuserController::class, 'update']);


});


// Grup untuk user yg sudah terautentikasi
Route::group(['middleware' => ['auth']], function() {

    //Route untuk menampilkan dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::get('/course_detail', [DashboardController::class, 'course_detail']);

    //untuk menampilkan data course
    Route::get('/course', [CourseController::class, 'index']);

    //untuk menampilkan data lecturer
    Route::get('/lecturer', [LecturerController::class, 'index']);

    //untuk menampilkan data student
    Route::get('/student', [StudentController::class, 'index']);

    //untuk menampilkan data managementuser
    Route::get('/managementuser', [ManagementuserController::class, 'index']);

});

//Route untuk menampilkan landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingController::class, 'about']);
Route::get('/admisi', [LandingController::class, 'admisi']);
Route::get('/matkul', [LandingController::class, 'matkul']);
Route::get('/detailcourse', [LandingController::class, 'detailcourse']);
Route::get('/faq', [LandingController::class, 'faq']);
Route::get('/eror404', [LandingController::class, 'eror404']);
Route::get('/gallery', [LandingController::class, 'gallery']);
Route::get('/dosen', [LandingController::class, 'dosen']);
Route::get('/detaillecturer', [LandingController::class, 'detaillecturer']);
Route::get('/princing', [LandingController::class, 'princing']);
Route::get('/testimoni', [LandingController::class, 'testimoni']);
Route::get('/mahasiswa', [LandingController::class, 'mahasiswa']);
Route::get('/blog', [LandingController::class, 'blog']);
Route::get('/matkul_list', [LandingController::class, 'matkul_list']);
Route::get('/blog_detail', [LandingController::class, 'blog_detail']);
Route::get('/mahasiswa_detail', [LandingController::class, 'mahasiswa_detail']);


Auth::routes();
