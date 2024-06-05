@extends('layouts.register')
@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="login_kominfo/img/logo_kominfo.png" width="300px" height:"100px" />
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <h4 class="login-box-msg"><b>DAFTAR AKUN</b></h4>
            @csrf
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-6">
                            <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat" autofocus>
                                </textarea>
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nomortelepon" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                        <div class="col-md-6">
                            <input id="nomortelepon" type="text" class="form-control @error('nomortelepon') is-invalid @enderror" name="nomortelepon" value="{{ old('nomortelepon') }}" autocomplete="nomortelepon" autofocus>

                            @error('nomortelepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <a class="btn btn-primary js-scroll-trigger col-md-6 offset-md-5" href="{{ url('/login') }}">Kembali</a>
                        </div>
                        <div class="col-xs-3" style="margin-left:-90px">

                            <button type="submit" class="btn btn-success">
                                {{ __('Register') }}
                            </button>
                        </div>



                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    @endsection