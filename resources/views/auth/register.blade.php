@extends('layouts.main')

@section('content')
<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Daftar Akun</h3>

        <form method="POST" action="/register">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-success w-100">Daftar</button>
        </form>

        <p class="text-center mt-3">
            Sudah punya akun?
            <a href="/login">Login</a>
        </p>
    </div>
</div>
@endsection
