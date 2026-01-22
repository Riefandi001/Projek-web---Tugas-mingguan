@extends('layouts/main')

@section('content')

<!-- HEADER NEWS -->
<section class="hero" style="height: 50vh;">
  <h2>Berita & Informasi</h2>
  <p>
    Kumpulan berita terbaru, informasi penting, dan update seputar
    kegiatan serta pengembangan website ini.
  </p>
</section>

<!-- LIST BERITA -->
<section class="content">
  @forelse($newss as $news)
    <article class="card">
      <h3>
        <a href="/news/{{ $news['slug'] }}" style="text-decoration:none; color:#3b82f6;">
          {{ $news['judul'] }}
        </a>
      </h3>

      <p style="font-size: 0.9rem; color: #6b7280; margin-bottom: 0.5rem;">
        ✍️ {{ $news['penulis'] }}
      </p>

      <p style="line-height: 1.6;">
        {{ Str::limit($news['konten'], 150) }}
      </p>

      <a href="/news/{{ $news['slug'] }}" style="display:inline-block; margin-top:1rem; color:#3b82f6;">
        Baca selengkapnya →
      </a>
    </article>
  @empty
    <div class="card" style="grid-column:1/-1; text-align:center;">
      <h3>Belum Ada Berita</h3>
      <p>Konten berita akan segera ditambahkan.</p>
    </div>
  @endforelse
</section>

@endsection
