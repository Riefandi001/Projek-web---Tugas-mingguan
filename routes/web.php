<?php

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

Route::get('/news', function () {

    return view('news', [
        "title" => "news",
        "newss" => News::ambildata(),
    ]);
});

Route::get('/news/{slug}', function ($slugp) {
    return view('singlenews', [
        "title" => "News",
        "new_news" => News::caridata($slugp),
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});

