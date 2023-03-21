@extends('layout.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container mt-5 hero">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 mb-4 card-side-profil rounded">
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-prim d-block" type="" href="{{ route('profil') }}">Profil</a>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-sec d-block" type="" href="{{ route('progres') }}">Progress</a>
                </div>
                <form action="{{url('logout')}}" method="POST" class="text-center pt-1 mb-2 pb-1 d-block">
                        @csrf
                        <div class="">
                            <button class="btn btn-logout d-block" type="submit">Logout</button>
                        </div>
                </form>
            </div>

            <div class="col-lg-8 mb-4 card-profil rounded">
                <h3 class="prim">PROFIL ANDA</h3>

                <form class="text-lg-start">
                    <div class="form-group row mb-1">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Abrar">
                        </div>
                    </div>
                    <!-- <div class="form-group row mb-1">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Randy Bergson">
                        </div>
                    </div> -->
                    <div class="form-group row mb-1">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Upload Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            <p class="text-lg-start text-danger">*Ukuran foto 5mb</p>
                        </div>
                    </div>
                </form>

                <form class="d-flex mb-5" role="login">
                    <a class="btn btn-prim ms-auto" type="submit" href="#">Simpan</a>
                </form>
            </div>
        </div>
    </section>
@endsection