<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "markonah",
        "nohp" => "00857326329",
        "foto" => "img/amazing.png",
    ]);
});

Route::get('/news', [NewsController::class,'index']);

Route::get('/news/{slug}', [NewsController::class, 'tampildata']);

Route::get('/mahasiswa', [MahasiswaController::class,'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'] )->name('mahasiswa');

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'] )->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'] )->name('insertdata');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'] ) ->name('tampildata');
Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'] ) ->name('editdata');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'] ) ->name('deletedata');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'storeRegister']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

// route yang BUTUH LOGIN
Route::middleware('auth.login')->group(function () {
    Route::get('/profile', function () {
        return view('profile', ['title' => 'Profile']);
    });

    Route::get('/mahasiswa', function () {
        return view('mahasiswa', ['title' => 'Mahasiswa']);
    });
});



