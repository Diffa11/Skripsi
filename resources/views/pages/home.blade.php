@extends('layouts.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <header class="container hero">
        <span>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="ml6">
                        <span class="letters">Belajar Al Qur’an dengan mudah dimanapun dan kapanpun</span>
                    </h1>
                    <p class="desc">Orang-orang yang selalu membaca Quran akan dianugerahkan perniagaan yang
                        tidak akan merugi oleh Allah SWT. Bahkan Allah juga menyempurnakan pahala
                        kepada mereka dan menambah karunia-Nya.
                    </p>
                    <form class="d-flex" role="#">
                        <a class="btn btn-prim1" type="submit" href="{{ route('program') }}">Mulai Belajar</a>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="assets/asian-muslim-man-smiling-holding-al-quran-book-hands-showing-something-his-side-white-background_448865-2783.jpg" width="580px" height="390px" class="rounded img-fluid" alt="75">
                </div>
            </div>
        </span>
    </header>

    <section class="container hero">
        <span>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="assets/asian-muslim-man-doing-thinking-gestire-looking-idea-white-background_448865-2824.jpg"
                        width="580px" height="390px" class="rounded img-fluid space-img d-none d-md-block" alt="75">
                </div>
                <div class="col-lg-6">
                    <h1 class="ml6">
                        <span class="text-wrapper">
                            <span class="letters1">Keuntungan Belajar Mengaji Untuk Kehidupan Kita</span>
                        </span>
                    </h1>
                    <h4 class="text-center sec" id="typewriter"></h4>
                </div>
            </div>
        </span>
    </section>

    <!-- Why -->
    <section class="container text-center">
        <span>
            <h2>Kenapa Harus Belajar Disini</h2>
        </span>
    </section>

    <!-- List Why -->
    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="assets/Materi.png" alt="" width="80px" class=" mx-auto mb-2">
                    <h5>Materi di mulai dari dasar</h5>
                    <p>Belajar mulai dari pengucapan, tandabaca, huruf, dan keluarnya huruf</p>
                </div>
            </div>
            
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="assets/VisAud.png" alt="" width="80px" class=" mx-auto mb-2">
                    <h5>Visual dan Audio</h5>
                    <p>Dibekali Visual dan Audio yang dapat membantu belajar agar mudah memahami materi yang diberikan</p>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="assets/Kuis.png" alt="" width="80px" class=" mx-auto mb-2">
                    <h5>Kuis Soal-Soal</h5>
                    <p>Untuk menguji kemampuan dari materi yang sudah diberikan agar semakin paham dasar-dasar
                    Al Qur’an</p>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="assets/Akses.png" alt="" width="80px" class=" mx-auto mb-2">
                    <h5>Akses Selamanya</h5>
                    <p>Dapat diakses dimanapun dan kapanpun</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="container text-center">
        <span>
            <h2>Apa Kata Mereka?</h2>
            <p>Mereka sudah merasakan serunya belajar Al Qur’an dan merasakan manfaatnya. Kamu selanjutnya?</p>
        </span>
    </section>

    <!-- List Testimoni -->
    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-4 mb-4">
                <div class="card testimoni ">
                    <p class="testi">Alhamdulillah sekarang bisa membaca Al Qur’an dengan baik dan insyaallah benar. Membantu banget nih buat temen-temen
                    yang mungkin terlambat untuk bisa tapi tidak terlambat untuk belajar. Semangat temen-temen !!</p>
                    <section class="container mt-4 position-absolute bottom-0 end-0">
                        <div class="row product-grid" data-aos="fade-up">
                            <div class="col-4 d-none d-md-block">
                                <img src="assets/testi1.png" class="cardtest">
                            </div>
                            <div class="col testi">
                                <h5>Brandon Passaquindici</h5>
                                <p class="sec">Mahasiswa</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card testimoni">
                    <p class="testi">Websitenya sangat membantu, tertolong banget buat saya yang sudah tua tapi malu ke pengajian. Jadi bisa belajar mandiri.
                    Dan kalau ragu bisa chat sama adminnya, dibantu sampe bisa. Syukron.</p>
                    <section class="container mt-4 position-absolute bottom-0 end-0">
                        <div class="row product-grid" data-aos="fade-up">
                            <div class="col-4 d-none d-md-block">
                                <img src="assets/testi2.png" class="cardtest">
                            </div>
                            <div class="col testi">
                                <h5>Justin Dorwart</h5>
                                <p class="sec">Pegawai Pabrik</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card testimoni">
                    <p class="testi">Awal dikasih tau ada website ini sama kk saya saya ragu. Khawatir ganggu waktu main saya. Tapi ternyata saya bisa
                    manajemen waktu dengan baik sehingga tau nih kapan harus buka buat belajar sehingga Alhamdulilah BISA. Terimakasih yuk
                    ngaji selalu ada dan selalu bisa.</p>
                    <section class="container mt-4 position-absolute bottom-0 end-0">
                        <div class="row product-grid" data-aos="fade-up">
                            <div class="col-4 d-none d-md-block">
                                <img src="assets/testi3.png" class="cardtest">
                            </div>
                            <div class="col testi">
                                <h5>Talan Dokidis</h5>
                                <p class="sec">Pelajar</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="container text-center">
        <span>
            <h2>Pertanyaan Yang Sering Ditanyakan</h2>
        </span>
    </section>

    <!-- List FAQ -->
    <section class="container mt-5 hero hero1">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-6 mb-4">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseOne">
                                Apakah ini berlangganan?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body desc">
                                <strong>Tidak</strong>. Kamu hanya cukup membuka dan pelajari materinya akses selamanya
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Apakah boleh share ke orang lain?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body desc">
                                Satu Akun hanya untuk satu orang. Maka dari itu, kamu diperkenankan untuk mengajak orang lain dan dapat membuat akun
                                terlebih dahulu
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Apakah website ini akan menjamin saya jadi bisa?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body desc">
                                Hadirnya kami disini, untuk membantu mu belajar dan bisa. Untuk kemauan kami akan memotivasimu agar terus melangkah
                                menjadi lebih baik lagi. Semangat!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                                Bagaimana sistem belajarnya?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body desc">
                                Metode belajar mencakup penggunaan visual dan audio secara online, dan jika kamu membutuhkan bantuan, tersedia admin
                                yang siap menjawab pertanyaan-pertanyaanmu. Tanpa adanya sesi live meeting, konsultasi hanya dapat dilakukan melalui
                                chat.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                                Yang dimaksud akses selamanya itu apa?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body desc">
                                Kamu dapat membukanya selama yang kamu mau. Tapi, jangan lupa username dan password yang sudah dibuat ya!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed drpdwn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSix">
                                Bagaimana prosedur bertanya kepada admin?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body desc">
                                Kamu dapat bertanya sebelum atau sesudah mempelajari materi yang ada. Untuk dapat bertanya kamu bisa langsung
                                mengunjungi bagian program lalu “Coba Tanya”
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Qustion -->
    <section class="container hero">
        <span>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="ml6">
                        <span class="letters">Sudah siap untuk belajar kembali Al Qur'an?</span>
                    </h1>
                    <p class="desc">Sekarang adalah giliranmu untuk melangkah agar bisa membaca Al Qur’an dengan baik lagi</p>
                    <form class="d-flex" role="#">
                        <a class="btn btn-prim1" type="submit" href="{{ route('login') }}">Gabung Sekarang</a>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="assets/asian-muslim-men-muslim-cloth-whispering-secrets-gossips-white-background_448865-2819.jpg"
                        width="580px" height="390px" class="rounded img-fluid  d-none d-lg-block" alt="75">
                </div>
            </div>
        </span>
    </section>
@endsection