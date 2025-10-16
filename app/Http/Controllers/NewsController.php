<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
   public function index() {
        return view('news', [
            "title" => "news",
            "newss" => News::ambildata(),
        ]);
   }

    public function tampildata($slugp) {
    return view('singlenews', [
        "title" => "News",
        "new_news" => News::caridata($slugp),
    ]);
}
}
