@extends('layouts/main')

@section('content')
<div class="container mt-4">

  {{-- Header --}}
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">📚 Data Mahasiswa</h3>
    <a href="/tambahmahasiswa" class="btn btn-success">
      + Tambah Data
    </a>
  </div>

  {{-- Alert Success --}}
  @if ($message = Session::get('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
          title: "Berhasil!",
          text: "{{ $message }}",
          icon: "success",
          confirmButtonColor: "#198754"
        });
      });
    </script>
  @endif

  {{-- Card --}}
  <div class="card shadow-sm border-0">
    <div class="card-body">

      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-dark text-center">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Prodi</th>
              <th>Email</th>
              <th>No. HP</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            @foreach ($data as $mahasiswa)
              <tr>
                <td class="text-center">{{ $i }}</td>
                <td>{{ $mahasiswa['name'] }}</td>
                <td>{{ $mahasiswa['nim'] }}</td>
                <td>{{ $mahasiswa['prodi'] }}</td>
                <td>{{ $mahasiswa['email'] }}</td>
                <td>{{ $mahasiswa['nohp'] }}</td>
                <td class="text-center">
                  <a href="/tampildata/{{ $mahasiswa['id'] }}" 
                     class="btn btn-sm btn-warning">
                    Edit
                  </a>
                  <button class="btn btn-sm btn-danger delete"
                          data-id="{{ $mahasiswa['id'] }}"
                          data-nama="{{ $mahasiswa['name'] }}">
                    Hapus
                  </button>
                </td>
              </tr>
              <?php $i++; ?>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
  $('.delete').click(function () {
    let id = $(this).data('id');
    let nama = $(this).data('nama');

    Swal.fire({
      title: "Yakin?",
      text: "Data " + nama + " akan dihapus!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#dc3545",
      cancelButtonColor: "#6c757d",
      confirmButtonText: "Ya, hapus"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = "/deletedata/" + id;
      }
    });
  });
</script>
@endsection
