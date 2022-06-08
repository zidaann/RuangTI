@extends('login.layouts.main')

@section('container')
<div class="content " >
      <div class="row " style="margin-top: 50px;">
        <div class="col-md-6 mb-3">
          <img src="../assets/img/login/login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents mt-3">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h2 class="fw-bold">Login</h2>
              <h6 class="mb-4 tex-dark" style="color: rgb(155, 155, 155);">Silahkan login untuk mengakses semua fitur di RuangTI</h6>
            </div>
            {{-- alert registrasi --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- alert gagal login --}}
            @if (session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/login" method="post">
                @csrf
                
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}" autocomplete="off">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
            </form>
            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang!</a> </small>
            </div>
          </div>
          
        </div>
        
      </div>
  </div>
@endsection

