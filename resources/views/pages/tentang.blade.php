@extends('layout.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <header class="container my-5">
        <span>
            <div class="text-center">
                <h2>
                    <span class="letters">Dalam perjalanannya, Yuk Ngaji memiliki nilai dan tujuan yang mendorong visi dan misi perusahaan. Memiliki nilai dan tujuan yang diharapkan menjadi dasar bagi Yuk Ngaji dan seluruh yang terlibat.</span>
                </h2>
            </div>
        </span>
    </header>

    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="assets/Visi.png" alt="" width="120px" class=" mx-auto mb-2">
                    <h5>Visi</h5>
                    <h4>Untuk Saling Membantu dan Menyemangati</h4>
                    <p>Ketika kita sudah mampu dalam membaca Al Qur’an, alangkah bijaknya kita dapat mengajari dan memberi dorongan semangat agar orang lain pun bisa seperti kita.</p>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="assets/Misi.png" alt="" width="120px" class=" mx-auto mb-2">
                    <h5>Misi</h5>
                    <h4>To coach, assist, and encourage even more</h4>
                    <p>Itulah misi kami. Dengan proses pembelajaran yang menarik dan efektif, siapapun dapat belajar Al Qu’ran, untuk mendapatkan ridho Allah dan menjadi lebih baik lagi!</p>
                </div>
            </div>
        </div>
    </section>

    <header class="container my-5">
        <span>
            <div class="text-center">
                <h2>
                    <span class="letters">Our Team</span>
                </h2>
            </div>
        </span>
    </header>

    <section class="container mt-5 hero1">
        <div class="row product-grid" data-aos="fade-up">
            <!-- <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/pleased-young-handsome-man-showing-thumbs-up-front-isolated-white-wall_141793-94240.jpg" alt="" width="350px" class=" mx-auto mb-2 rounded">
                    <h2>Brandon Gouse</h2>
                    <p>CTO Developer</p>
                </div>
            </div> -->

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/pleased-young-handsome-man-showing-thumbs-up-front-isolated-white-wall_141793-94240.jpg" alt="" width="350px" class=" mx-auto mb-2 rounded" height="235px">
                    <h2>Brandon Gouse</h2>
                    <p>CTO Developer</p>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/asian-muslim-man-wearing-casual-muslim-clothes-hurry-pointing-watch-time-impatience-looking-camera-white-background_448865-2830.jpg" alt="" width="350px" class=" mx-auto mb-2 rounded">
                    <h2>Jakob Donin</h2>
                    <p>CEO YUK!NGAJI</p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/smile-happy-face-ordinary-asian-man-muslim-costume-concept-charming-positive-thinking_593556-3652.jpg" alt="" width="350px" class=" mx-auto mb-2 rounded" height="233px">
                    <h2>Jakob Donin</h2>
                    <p>CEO YUK!NGAJI</p>
                </div>
            </div>
        </div>
    </section>
@endsection