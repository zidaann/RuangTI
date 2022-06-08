@extends('login.layouts.main')

@section('container')
<div class="content " >
      <div class="row " style="margin-top: 50px;">
        <div class="col-md-6">
          <img src="../assets/img/login/login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents mt-3">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 class="fw-bold">Register</h3>
              <h6 class="mb-4 tex-dark" style="color: rgb(155, 155, 155);">Lakukan pendaftaran dahulu untuk mendapatkan hak akses ke Ruang TI</h6>
            </div>
            <form action="/register" method="post">
                @csrf
                
              <div class="form-group first">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" autocomplete="off">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group first">
                <label for="username">username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}" autocomplete="off">
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
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
                <button class="btn btn-primary" type="submit">Register</button>
              </div>
            </form>
                <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Masuk sekarang!</a> </small>
            </div>
          </div>
          
        </div>
        
      </div>
  </div>
@endsection

