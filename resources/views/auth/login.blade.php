@extends('layouts.main')

@section('content')
<div class="container mt-5" style="max-width: 400px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Login</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>
        </form>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <p class="text-center mt-3">
            Belum punya akun?
            <a href="/register">Daftar dulu</a>
        </p>
    </div>
</div>
@endsection
