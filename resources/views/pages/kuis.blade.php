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
                <div class="card-materi rounded bg-transparent">
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4>Pengenalan</h4><span>(1 of 5)</span></div>
                    </div>
                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="sec">Q.</h3>
                            <h5 class="mt-1 ml-2">Huruf hijaiyah apa setelah huruf Ba?</h5>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Alif</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Tsa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Ta</label>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                        <button class="btn btn-prev d-flex align-items-center" type="button">
                            <i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;Sebelumnya</button>
                        <button class="btn btn-next align-items-center" type="button">Selanjutnya<i class="fa fa-angle-right ml-2"></i></button></div>
                    </div>
                </div>
            </div>
    </section>
@endsection