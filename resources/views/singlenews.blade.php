@extends('layouts/main')
@section('content') 
    <article>
        <h1>{{ $new_news["judul"] }}</h1>
        <h3>{{ $new_news["penulis"] }}</h3>
        <p>{{ $new_news["konten"] }}</p>
    </article>

    <a href="/news">kembali</a>
@endsection