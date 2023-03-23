@extends('layouts.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-3 mb-4 card-side-profil rounded">
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-prim d-block" type="" href="{{ route('profil') }}">Profil</a>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-sec d-block" type="" href="{{ route('progres') }}">Progress</a>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-sec d-block" type="">Logout</a>
                </div>
            </div>

            <div class="col-lg-8 mb-4 card-progress rounded">
                <h3 class="prim">Lanjut Belajar</h3>
                <p>Yuk lanjut belajarnya agar kamu semakin paham akan Al Qur’an</p>
                <div class="card-background">
                    <div class="card-in-progress d-block rounded">
                        <div class="d-flex align-items-center">
                            <img src="assets/sidik-kurniawan-hiFpJqA4FcE-unsplash.jpg" alt="" width="300px" class="rounded img-fluid d-none d-lg-block">
                            <div class="d-block text-start">
                                <h4 class="ml6">
                                    <span class="letters">Pengenalan huruf hijaiyah dan tanda baca</span>
                                </h4>
                                <p class="desc">Sebelum membaca Al-Qu’ran perlu mengetahui huruf-huruf apa saja yang terdapat didalamnya.
                                </p>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <form class="d-flex justify-content-center" role="#">
                                    <button class="btn btn-sec" type="submit">Selesai</button>
                                </form>                       
                            </div>
                        </div>
                    </div>
                    <div class="card-in-progress d-block rounded">
                        <div class="d-flex align-items-center">
                            <img src="assets/gr-stocks-nAmQxyPsheM-unsplash.jpg" alt="" width="300px" class="rounded img-fluid d-none d-lg-block">
                            <div class="d-block text-start">
                                <h4 class="ml6">
                                    <span class="letters">Makharijul huruf</span>
                                </h4>
                                <p class="desc">Ketika membaca Al-Qur'an, setiap huruf harus dibunyikan sesuai makhraj hurufnya/tempat keluarnya huruf
                                </p>
                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <form class="d-flex justify-content-center" role="#">
                                    <button class="btn btn-prim" type="submit">Lanjut Belajar</button>
                                </form>                            
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
@endsection