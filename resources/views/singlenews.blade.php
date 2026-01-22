@extends('layouts/main')

@section('content')

<!-- HEADER ARTIKEL -->
<section class="hero" style="height: 45vh;">
  <h2>{{ $new_news['judul'] }}</h2>
  <p>
    Ditulis oleh <strong>{{ $new_news['penulis'] }}</strong>
  </p>
</section>

<!-- ISI ARTIKEL -->
<section class="content">
  <article class="card" style="grid-column: 1 / -1;">
    <p style="line-height: 1.8; font-size: 1.05rem;">
      {{ $new_news['konten'] }}
    </p>

    <hr style="margin: 2rem 0;">

    <a href="/news" class="btn">← Kembali ke Berita</a>
  </article>
</section>

@endsection
