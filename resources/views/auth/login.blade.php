@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="page-content" class="page-content d-flex align-items-center justify-content-center vh-100" style="background-image: url('assests/img/bg-header.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="card card-login mx-auto" style="max-width: 400px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <h2 class="text-center mb-4">Login</h2>
            <form class="form-horizontal" action="index.html">
                <div class="form-group row">
                    <div class="col-md-20">
                        <input class="form-control" type="text" required="" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-20">
                        <input class="form-control" type="password" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row d-flex justify-content-between">
                    <div class="col-md-12 text-right">
                        <a href="#" class="text-primary">Forgot password?</a>
                    </div>
                </div>
                <div class="form-group row text-center mt-4">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
