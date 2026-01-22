@extends('layouts/main')

@section('content')

<!-- HERO -->
<section class="hero">
  <h2>Selamat Datang di MyWebsite</h2>
  <p>
    Website pribadi untuk berbagi informasi, berita, dan data mahasiswa.
    Dibangun dengan Laravel dan penuh semangat belajar 🚀
  </p>

  @if(session()->has('user'))
    <a href="/mahasiswa" class="btn">Lihat Data Mahasiswa</a>
  @else
    <a href="/login" class="btn">Mulai Sekarang</a>
  @endif
</section>

<!-- ABOUT -->
<section class="content">
  <div class="card">
    <h3>Tentang Website</h3>
    <p>
      MyWebsite adalah project website pribadi yang dikembangkan sebagai media
      pembelajaran dan eksperimen dalam pengembangan web menggunakan Laravel,
      middleware auth, dan UI modern.
    </p>
  </div>

  <div class="card">
    <h3>Tentang Saya</h3>
    <p>
      Saya adalah mahasiswa Teknologi Informasi yang tertarik pada
      pengembangan web, backend, dan sistem informasi. Website ini akan terus
      dikembangkan seiring proses belajar.
    </p>
  </div>

  <div class="card">
    <h3>Fitur Utama</h3>
    <ul style="margin-left: 1rem; line-height: 1.8;">
      <li>🔐 Login & Register</li>
      <li>🎓 Manajemen Data Mahasiswa</li>
      <li>📰 Halaman News</li>
      <li>📩 Halaman Contact</li>
    </ul>
  </div>
</section>

<!-- CTA -->
<section class="content">
  <div class="card" style="grid-column: 1 / -1; text-align: center;">
    <h3>Siap Menjelajah?</h3>
    <p style="margin-bottom: 1.5rem;">
      Jelajahi fitur website ini dan lihat bagaimana Laravel bekerja
      dalam membangun aplikasi web modern.
    </p>

    @if(session()->has('user'))
      <a href="/profile" class="btn">Lihat Profil</a>
    @else
      <a href="/register" class="btn">Daftar Sekarang</a>
    @endif
  </div>
</section>

@endsection
