@extends('layouts.main')

@section('container')
<style>
    body{
    background-color: #154286;
}
</style>
<div class="row justify-content-center">
    <div class="col-md-3" style="margin-top: 100px">
        <main class="form-signin bg-white px-3 py-4 rounded-4 shadow">
            <form method="POST" action="{{ route('process-register') }}">
                @csrf
                <div class="title justify-content-center d-flex">
                    <h1 class="h3 mb-3 fw-normal" style="color: #154286">Form Registration</h1>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="floatingInput" placeholder="35xxxxxxx" required value="{{ old('nisn') }}">
                    <label for="floatingInput">NIK/NISN</label>
                    @error('nisn')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama" required value="{{ old('name') }}">
                    <label for="floatingInput">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="konfirmasi_password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="floatingPassword" placeholder="Konfirmasi Password" required>
                    <label for="floatingPassword">Konfirmasi Password</label>
                    @error('konfirmasi_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg my-3 text-white shadow" style="background-color: #154286" type="submit">Registrasi</button>
            </form>
            <small class="d-flex justify-content-center">Sudah Punya Akun ? <a class="text-decoration-none" href="{{ route('login') }}"> Login</a></small>
        </main>
    </div>
</div>
@endsection