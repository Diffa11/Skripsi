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
                                    <h3 class="prim">Login</h3>
                                    <p>Selamat datang kembali<img src="assets/Waving Hand.png" alt="nyapa" width="20" height="20"></p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <h5 class="sec">Email</h5>
                                        <div class="form-outline mb-4">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <h5 class="sec">Password</h5>
                                        <div class="form-outline mb-4">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="d-flex mb-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                                
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="ms-auto">
                                                    <a class="btn btn-link ms-auto" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-prim mb-3" type="submit">{{ __('Login') }}</button>
                                            {{-- <a href="{{route('home')}}" class="btn btn-sec mt-5 mb-5">kembali</a> --}}
                                            <a href="{{ __('register') }}"class="btn btn-sec" type="" >Register</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mt-4">
                                <img src="assets/indonesia-bertauhid-ocEpT2tKX5c-unsplash.jpg" class="rounded img-fluid piclogin d-none d-lg-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
