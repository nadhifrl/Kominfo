@extends('layouts.login')
@section('content')

<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{asset('login_kominfo/mp4/jember.mp4')}}" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <img src="login_kominfo/img/logo_kominfo.png" class="mb-5" width="500px" style="margin-left:-10px"/>
            <div class="input-group input-group-newsletter">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" aria-label="Enter email..."  aria-describedby="submit-button" placeholder="Enter email..." required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <br>
                <div class="input-group input-group-newsletter">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" aria-label="Enter password..."  aria-describedby="submit-button" placeholder="Enter password..." required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary "id="submit-button">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                <br>
                <h6 style="color:black">Belum punya akun?</h6>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-6" style="margin-left: 16px">
                        @if (Route::has('password.request'))
                        <a class="btn btn-success" href="/register">
                            {{ __('Daftar ?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="https://www.youtube.com/channel/UCCD5-TtgnIVih2Dcy0kCuiA">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.facebook.com/Dinas-Komunikasi-Informatika-Kabupaten-Jember-1911954692385233/">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.instagram.com/kominfojember/">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>
    @endsection