@extends('layouts.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <header class="container my-5">
        <span>
            <div class="text-center">
                <h1 class="">
                    <span class="letters">Berikut program Yuk!Ngaji yang bisa kamu ikuti!</span>
                </h1>
                <h5 class="desc">Materi dibuat step by step agar memudahkan kamu dalam belajar. Selesaikan satu bab terlebih dahulu agar dapat memahami materi dan lanjut ke bab selanjutnya.
                </h5>
            </div>
        </span>
    </header>
    
    <!-- materi satu -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/sidik-kurniawan-hiFpJqA4FcE-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Pengenalan</span>
                        </h3>
                        <p class="desc">Sebelum membaca Al-Qu’ran perlu mengetahui huruf-huruf, dan tanda baca apa saja yang terdapat didalamnya.
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

    <!-- materi dua -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/gr-stocks-nAmQxyPsheM-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Makharijul huruf</span>
                        </h3>
                        <p class="desc">Ketika membaca Al-Qur'an, setiap huruf harus dibunyikan sesuai makhraj hurufnya/tempat keluarnya huruf
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- materi ketiga -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/adli-wahid-tfD5vnMMewA-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Hukum Nun Mati</span>
                        </h3>
                        <p class="desc">Hukum nun mati (sukun) dan tanwin berlaku jika nun mati atau tanwin bertemu huruf-huruf tertentu
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- materi keempat -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/ayesha-firdaus-JKzJl0-DtFI-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Hukum Mim Mati</span>
                        </h3>
                        <p class="desc">Huruf mim yang tidak memiliki tanda baris/harakat terjadi apabila bertemu dengan salah satu huruf hijaiyah
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- materi kelima -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/abdullah-haidar-affa-Au2wQ-GLAKE-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Hukum Mad</span>
                        </h3>
                        <p class="desc">Memanjangkan suara bacaan huruf Al-Qur'an disebabkan adanya huruf "Mad" sesuai aturan-aturan yang berlaku
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- materi keenam -->
     <section class="container my-5">
        <div class="row product-grid" data-aos="fade-up">
            <div class="card rounded">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/taliwang-mengaji-RzdNH0ZfEQ8-unsplash.jpg" alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="ml6">
                            <span class="letters">Test Pemahaman</span>
                        </h3>
                        <p class="desc">Uji pemahaman mu berdasarkan materi yang sudah dipelajari agar lebih paham
                        </p>
                        <form class="d-flex justify-content-center" role="#">
                            <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
     </section>

    <section class="container hero">
        <span>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="ml6">
                        <span class="letters">Apakah kamu ingin bertanya kepada guru kami?</span>
                    </h1>
                    <p class="desc">Apabila kamu memiliki pertanyaan atau ada yang kurang dipahami dari materi yang diberikan kamu dapat bertanya loh!</p>
                    <form class="d-flex" role="#">
                        <button class="btn btn-prim1" type="submit">Coba Bertanya</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="assets/asian-muslim-man-smiling-with-arms-crossed-white-background_448865-2816.jpg"
                        width="580px" height="390px" class="rounded img-fluid  d-none d-lg-block" alt="75">
                </div>
            </div>
        </span>
    </section>
@endsection