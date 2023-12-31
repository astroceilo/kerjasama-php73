@extends('auths.master')
@section('title','Login Pegawai Kerjasama')
@section('content')

  {{-- @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade-show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif --}}

  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>Kerjasama</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"><b>Login Pegawai Kerjasama</b><br>UIN Sunan Gunung Djati Bandung</p>

        <form action="{{ url('/postloginpegawai') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="username" class="form-control @error('username') is-invalid @enderror" name="username" autocomplete="off" placeholder="Username" autofocus required value="{{ old('username') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <!-- <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div> -->
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="{{ url('/login') }}">Login</a>
        </p>
        {{-- <p class="mb-0">
          <a href="{{ url('/register') }}" class="text-center">Register member baru</a>
        </p> --}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

@endsection