<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NewsController;
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


Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});



