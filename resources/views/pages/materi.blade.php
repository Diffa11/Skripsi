@extends('layout.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container mt-5 hero">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 mb-4 card-side-materi rounded">
                <div class="text-center pt-1 mb-4 pb-1">
                    <a class="btn btn-prim d-block" type="" href="">Pengantar Materi</a>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <p>
                        <a class="btn btn-prim d-block" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Pengenalan Huruf Hijaiyah
                        </a>
                    </p>
                        <div class="collapse" id="collapseExample">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Pengenalan Huruf Hijaiyah 1-7</a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Pengenalan Huruf Hijaiyah 8-14</a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Pengenalan Huruf Hijaiyah 15-21</a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Pengenalan Huruf Hijaiyah 22-29</a>
                        </div>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <p>
                        <a class="btn btn-prim d-block" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                            Pengenalan Tanda Baca
                        </a>
                    </p>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Fathah</a>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Kasrah</a>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Dhammah</a>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Sukun</a>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Tanwin</a>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <a class="btn btn-sec d-block mb-4" type="" href="">Tasydid</a>
                        </div>
                </div>
                <div class="text-center pt-1 mb-4 pb-1">
                    <a class="btn btn-prim d-block" type="" href="">Kuis</a>
                </div>
            </div>

            <div class="col-lg-8 mb-4">
                <div class="card-materi rounded">
                    <img src="assets/Alif.png" alt="" class="img-fluid rounded">
                </div>
                <div class="d-block d-lg-flex align-items-center mt-4 audiobar">
                    <audio controls class="justify-content-start">
                        <source src="assets/Lathi.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                    </audio>
                    <div class="d-block gap-2 d-lg-flex text-center">
                        <button class="btn btn-prev me-md-2" type="button">Sebelumnya</button>
                        <button class="btn btn-next" type="button">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection