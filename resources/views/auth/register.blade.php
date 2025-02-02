{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div style="background-color: #65894B">
        <div class="container" style="padding-top: 1rem; padding-bottom: 1rem; padding: 3rem;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="text-align: center; font-weight: 800; font-size: 24px;">{{ __('Register UMT') }}</div>
    
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
    
                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
    
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="nama_perusahaan"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nama Perusahaan') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="nama_perusahaan" type="text"
                                            class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                            name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required
                                            autocomplete="nama_perusahaan" autofocus>
    
                                        @error('nama_perusahaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="contact_person"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Contact Person') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="contact_person" type="text"
                                            class="form-control @error('contact_person') is-invalid @enderror"
                                            name="contact_person" value="{{ old('contact_person') }}" required
                                            autocomplete="contact_person" autofocus>
    
                                        @error('contact_person')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="phone"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Nomor Handphone') }}</label>
    
                                    <div class="col-md-6">
                                        <input id="phone" type="number"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" required autocomplete="phone" autofocus>
    
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="alamat_perusahaan"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Alamat Perusahaan') }}</label>
    
                                    <div class="col-md-6">
                                        <textarea id="alamat_perusahaan" type="text" class="form-control @error('alamat_perusahaan') is-invalid @enderror"
                                            name="alamat_perusahaan" value="{{ old('alamat_perusahaan') }}" required autocomplete="alamat_perusahaan"
                                            autofocus></textarea>
    
                                        @error('alamat_perusahaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
{{-- @endsection --}}
