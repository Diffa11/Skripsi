@extends('layouts.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <header class="container my-5">
        <span>
            <div class="text-center">
                <h1 class="">
                    <span class="letters">Yuk!Ngaji</span>
                </h1>
                <h5 class="desc">Kurikulum didesain dengan persetujuan dari Ahli Tahsin untuk mempersiapkan dalam belajar Al Qur’an. YUK! Ngaji hadir untuk membantumu belajar agar terarah.
                </h5>
            </div>
        </span>
    </header>

    <section>
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Pertama</h2>
                        <h4>Pengenalan huruf hijaiyah dan tanda baca</h4>
                        <p class="mb-0">Mempelajari macam-macam huruf hijaiyah dan tanda baca yang dipakai di Al Qur’an</p>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Kedua</h2>
                        <h4>Memulai Makharijul huruf</h4>
                        <p class="mb-0">Mempelajari tempat-tempat keluarnya bunyi huruf hijaiyah ketika dibaca, agar bunyi huruf itu dapat dibedakan dengan bunyi huruf lainnya.</p>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Ketiga</h2>
                        <h4>Mempelajari Hukum Nun Mati</h4>
                        <p class="mb-0">Mempelajari apa saja hukum nun mati. Hukum ini berlaku jika nun mati atau tanwin bertemu huruf-huruf tertentu yang terbagi menjadi 4 terdiri dari idzhar, idgham, iqlab, dan ikhfa.</p>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Keempat</h2>
                        <h4>Mempelajari Hukum Mim Mati</h4>
                        <p class="mb-0">Mempelajari apa saja hukum mim mati. Hukum ini berlaku jika mim mati atau tanwin bertemu huruf-huruf tertentu yang terbagi menjadi 3 terdiri dari ikhfa syafawi, idzhar syafawi, Idgham mutamatsilain.</p>
                    </div>
                </div>
                <div class="timeline left">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Kelima</h2>
                        <h4>Mempelajari Hukum Mad</h4>
                        <p class="mb-0">Mempelajari apa saja hukum mad. Hukum ini berlaku memanjangkan bacaan huruf yang terbagi menjadi beberapa bagian diantaranya mad thabi’i, mad wajib, mad jaiz dan lainnya.</p>
                    </div>
                </div>
                <div class="timeline right">
                    <div class="card-body-timeline p-4 rounded">
                        <h2>Langkah Keenam</h2>
                        <h4>Test pemahaman</h4>
                        <p class="mb-0">Menguji dengan test soal-soal dari materi yang sudah disampaikan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container hero">
        <span>
            <div class="justify-content-center">
                <h2 class="text-center mt-4">Tunggu Apa Lagi</h2>
                <h5 class="text-center desc">Segera bergabung bersama kami untuk bersama memahami Al Qur’an.
                </h5>
                <div class="text-center mt-4">
                    <button class="btn btn-prim1 " type="submit">Gabung Sekarang</button>
                </div>
            </div>
        </span>
    </section>
@endsection