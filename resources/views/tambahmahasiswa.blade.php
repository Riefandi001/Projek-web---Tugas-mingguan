@extends('layouts/main')

@section('content')
<div class="container mt-5">

  <div class="row justify-content-center">
    <div class="col-md-7">

      <div class="card shadow-sm border-0">
        <div class="card-body p-4">

          <h4 class="fw-bold text-center mb-4">
            ➕ Tambah Data Mahasiswa
          </h4>

          <form action="/insertdata" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" 
                     name="name" 
                     class="form-control"
                     placeholder="Masukkan nama lengkap"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">NIM</label>
              <input type="number" 
                     name="nim" 
                     class="form-control"
                     placeholder="Masukkan NIM"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Program Studi</label>
              <input type="text" 
                     name="prodi" 
                     class="form-control"
                     placeholder="Contoh: Teknik Informatika"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" 
                     name="email" 
                     class="form-control"
                     placeholder="contoh@email.com"
                     required>
            </div>

            <div class="mb-4">
              <label class="form-label">No. HP</label>
              <input type="number" 
                     name="nohp" 
                     class="form-control"
                     placeholder="08xxxxxxxxxx"
                     required>
            </div>

            <div class="d-flex justify-content-between">
              <a href="/mahasiswa" class="btn btn-secondary">
                ← Kembali
              </a>
              <button type="submit" class="btn btn-primary px-4">
                Simpan Data
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
