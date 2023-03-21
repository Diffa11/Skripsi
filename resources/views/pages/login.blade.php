@extends('layout.daftar')

@section('title')
    Home - yukngaji
@endsection

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
                            <div class="text-start">
                                <h4 class="prim">Login</h4>
                                <p>Selamat datang kembali<img src="assets/Waving Hand.png" alt="nyapa" width="20" height="20"></p>
                            </div>

                            <form class="mt-5">
                                <p class="sec">Username</p>
                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example11" class="form-control"
                                    placeholder="Masukan username yang sudah dibuat"/>
                                </div>
                                
                                <p class="sec">Password</p>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example22" class="form-control" 
                                    placeholder="Masukan password yang sudah dibuat"/>
                                </div>

                                <div class="d-flex mb-4">
                                    <!-- Checkbox -->
                                    <a href="#!" class="float-end">Forgot password?</a>
                                </div>
                                

                                <div class="text-center pt-1 mb-4 pb-1">
                                    <a class="btn btn-primlogin d-block" type="">Login</a>
                                </div>

                                <p class="justify-content-center">Belum punya akun?
                                    <a href="">Registrasi</a>
                                </p>
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