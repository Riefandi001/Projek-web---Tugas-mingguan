@extends('layouts/main')

@section('content')

<!-- HEADER CONTACT -->
<section class="hero" style="height: 45vh;">
  <h2>Hubungi Saya</h2>
  <p>
    Jangan ragu untuk menghubungi saya jika ada pertanyaan,
    saran, atau sekadar ingin berdiskusi.
  </p>
</section>

<!-- KONTEN CONTACT -->
<section class="content">

  <!-- Info Kontak -->
  <div class="card">
    <h3>Informasi Kontak</h3>
    <p>Email: <strong>rdsputra45@email.com</strong></p>
    <p>Telepon: <strong>085866985738</strong></p>
    <p>Lokasi: <strong>Semarang, Indonesia</strong></p>
  </div>

  <!-- Form Kontak -->
  <div class="card">
    <h3>Kirim Pesan</h3>
    <form>
      <div style="margin-bottom:1rem;">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama Anda">
      </div>

      <div style="margin-bottom:1rem;">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Email Anda">
      </div>

      <div style="margin-bottom:1rem;">
        <label>Pesan</label>
        <textarea class="form-control" rows="4" placeholder="Tulis pesan..."></textarea>
      </div>

      <button type="submit" class="btn">Kirim Pesan</button>
    </form>
  </div>

</section>

@endsection
