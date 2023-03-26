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
    
    @foreach ($items as $item)
        <!-- materi-->
        <section class="container my-5">
            <div class="row product-grid" data-aos="fade-up">
                <div class="card rounded">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src={{ Storage::url($item->image) }} alt="" width="500px" class=" mx-auto mb-2 rounded img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="ml6">
                                <span class="letters">{{ $item->nama_kelas }}</span>
                            </h3>
                            <p class="desc">{{ $item->description }}</p>

                            @guest
                                <form class="d-flex justify-content-center" role="#">
                                <a class="btn btn-prim1" href="{{route('pemberitahuan')}}">Belajar Sekarang</a>
                            </form>
                            @endguest

                            @auth
                                <form class="d-flex justify-content-center" role="#">
                                    <a class="btn btn-prim1" href="{{route('materi',$item->id)}}">Belajar Sekarang</a>
                                </form>                            
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="container hero">
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
                        width="580px" height="390px" class="rounded img-fluid d-none d-lg-block" alt="75">
            </div>
        </div>
    </section>
@endsection