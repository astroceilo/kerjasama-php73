@php
  $user = request()->session()->get('user');
@endphp

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="nav-item dropdown user-menu">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="{{asset('assets/admin')}}/dist/img/avatar.png" class="user-image" alt="User Image" style="margin-top: 0px;">
          <span class="hidden-xs">{{ $user['nama'] }}</span>
        </a>
        <ul class="dropdown-menu" style="border-radius: .25rem; top:45px;">
          <div class="card card-widget widget-user shadow" style="margin-bottom: 0px">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-primary">
              <p class="widget-user-username" style="font-size: 20px; font-weight: 600;">{{ $user['nama'] }}</p>
              {{-- <p class="widget-user-desc">{{ $user['profil']['unit'] }}</p> --}}
            </div>
            <div class="widget-user-image" style="padding-top: 25px;">
              <img class="img-circle elevation-2" src="{{asset('assets/admin')}}/dist/img/avatar.png" alt="User Avatar">
              {{-- @if ($user->poto)
                <img class="img-circle elevation-2" src="{{ $user['foto'] }}" alt="User Avatar">
              @else
                <img class="img-circle elevation-2" src="{{asset('assets/admin')}}/dist/img/avatar.png" alt="User Avatar">
              @endif --}}
            </div>
            <div class="card-footer" style="padding-top: 75px;">
              {{-- <div class="row">
                <div class="col-sm-12">
                  <div class="description-block">
                    <h5 class="description-header">{{ $user['profil']['unit'] }}</h5>
                    <span class="description-text">{{ Carbon\Carbon::parse(Auth::user()->created_at)->translatedFormat('Y') }}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div> --}}
              <div class="row" style="padding-top: 15px;">
                <div class="col-sm-6">
                  <a href="{{ url('/pegawai/profile') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="col-sm-6">
                  <form action="/logoutpegawai" method="post">
                    @csrf
                    <button type="submit" class="btn btn-default btn-flat"><i class="fas fa-sign-out-alt"> Sign Out</i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </ul>
      </li>
      <!-- Sign Out -->
      {{-- <li class="nav-item">
          <a class="nav-link" data-widget="" href="{{route('logout')}}" role="button">
              <i class="fas fa-sign-out-alt"> Sign Out</i>
          </a>
      </li> --}}
    </ul>
  </nav>