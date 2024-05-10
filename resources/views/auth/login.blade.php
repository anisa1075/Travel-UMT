{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login UMT</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @media (max-width: 768px) {
            /* /* .img {
                margin-left: 1rem;/* Menghilangkan margin left pada tampilan HP */
            /* } */  */
            
        }
    </style>

</head>


<body style="background-color: #65894B">
    <div class="container lg: p-3"
        style="background-color: #65894B; padding: 0px 12rem; margin:auto; padding-top: 5rem;">
        <div class="row justify-content-center">

            <div class="col-md-8" style="padding-top: 8rem;">
                {{-- <img src="{{ asset('img/logo.png') }}" class="img" alt="Logo UMT"
                    style="padding-bottom: 1rem; margin-left: 20.5rem; padding-top: 4rem;"> --}}
            
                <div class="card">

                    <div class="card-header" style=" font-family: Rasa, serif; text-align:center; font-weight:800">
                        {{ __('Login Agen Travel') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"
                                    style="font-family: Poppins, sans-serif;">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Masukkan Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"
                                    style="font-family: Poppins, sans-serif;">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Masukkan Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="kode_akses"
                                    class="col-md-4 col-form-label text-md-end" style="font-family: Poppins, sans-serif;">{{ __('Kode Akses') }}</label>

                                <div class="col-md-6">
                                    <input id="kode_akses" type="number"
                                        class="form-control @error('email') is-invalid @enderror" name="kode_akses"
                                        value="{{ old('kode_akses') }}" required autocomplete="kode_akses" autofocus placeholder="Masukkan Kode Akses">

                                    @error('kode_akses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}



                            <div class="row mb-0">

                                <div class="col-md-8 offset-md-4">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                            style="text-decoration: none;">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4 mt-4">
                                    <p>Don't Have Account? <a href="{{ route('register') }}" style="text-decoration: none;">Create One</a></p>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
