@extends('layout.daftar')

@section('content')
 <section class="gradient-form">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="rounded-3 text-black">
                    <div class="row">
                    <div class="col-lg-6">
                        <a href="{{route('home')}}" class="btn btn-sec mt-5 mb-5">kembali</a>

                        <div class="card-body">
                            <div class="text-start mb-5">
                                <h4 class="prim">Register</h4>
                                <p>Buat akun untuk dapat masuk ke <img src="assets/logo.png" alt="nyapa" width="160" height="40"></p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0 mt-5">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-prim">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <img src="assets/ali-burhan-2HgHr60mWVo-unsplash.jpg" class="rounded img-fluid piclogin d-none d-lg-block">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </div>
</div>
@endsection
