@extends('layouts/main')

@section('content')
<div class="container mt-5">

  <div class="row justify-content-center">
    <div class="col-md-7">

      <div class="card shadow-sm border-0">
        <div class="card-body p-4">

          <h4 class="fw-bold text-center mb-4">
            ✏️ Edit Data Mahasiswa
          </h4>

          <form action="/editdata/{{ $data['id'] }}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text"
                     name="name"
                     class="form-control"
                     value="{{ $data['name'] }}"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">NIM</label>
              <input type="number"
                     name="nim"
                     class="form-control"
                     value="{{ $data['nim'] }}"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Program Studi</label>
              <input type="text"
                     name="prodi"
                     class="form-control"
                     value="{{ $data['prodi'] }}"
                     required>
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email"
                     name="email"
                     class="form-control"
                     value="{{ $data['email'] }}"
                     required>
            </div>

            <div class="mb-4">
              <label class="form-label">No. HP</label>
              <input type="number"
                     name="nohp"
                     class="form-control"
                     value="{{ $data['nohp'] }}"
                     required>
            </div>

            <div class="d-flex justify-content-between">
              <a href="/mahasiswa" class="btn btn-secondary">
                ← Kembali
              </a>
              <button type="submit" class="btn btn-warning px-4">
                Simpan Perubahan
              </button>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
