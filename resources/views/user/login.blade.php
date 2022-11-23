@extends('layouts.main')

@section('container')
<style>
    body{
    background-color: #154286;
}
</style>
<div class="row justify-content-center">
    <div class="col-md-3" style="margin-top: 100px">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
  
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin bg-white px-3 py-4 rounded-4 shadow">
            <form method="POST" action="{{ route('process-login') }}">
                @csrf
                <div class="image-section justify-content-center d-flex">
                    <img class="mb-4" src="assets/img/logo.png" width="120px">
                </div>
                <div class="title justify-content-center d-flex">
                    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg my-3 text-white shadow" style="background-color: #154286" type="submit">Login</button>
            </form>
            <small class="d-flex justify-content-center">Belum Punya Akun ? <a class="text-decoration-none" href="{{ route('register') }}"> Registrasi Disini</a></small>
        </main>
    </div>
</div>
@endsection