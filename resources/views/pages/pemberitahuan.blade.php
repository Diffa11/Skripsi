@extends('layout.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container hero">
        <span>
            <div class="justify-content-center">
                <img src="assets/asian-muslim-man-doing-thinking-gestire-looking-idea-white-background_448865-2756.webp" width="580px" height="390px" class="rounded img-fluid  d-none d-lg-block  mx-auto" alt="75">
                <h5 class="text-center mt-4">Upss... untuk dapat mengakses materinya, kamu perlu login terlebih dahulu</h5>
                
                <div class="text-center mt-4">
                    <a class="btn btn-prim" type="submit" href="{{ route('login') }}">Login Sekarang</a>
                </div>
            </div>
        </span>
    </section>
@endsection