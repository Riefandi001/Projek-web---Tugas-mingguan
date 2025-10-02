@extends('layouts/main')

@section('content')
  <h1>Berita</h1>

  @foreach($newss as $news)
  <article class="mt-5">
    <h2>{{$news['judul']}}</h2>
    <h3>{{$news['penulis']}}</h3>
    <p>{{$news['konten']}}</p>
  </article>
  @endforeach
@endsection