@extends('layouts.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-3 mb-4 card-side-profil rounded">
                <div class="d-grid gap-2">
                    <a class="btn btn-sec mb-2" type="button" href="{{ route('profil') }}">Profil</a>
                    <a class="btn btn-prim mb-2" type="button" href="{{ route('progres') }}">Progres</a>
                    <form action="{{url('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger mb-2">Logout</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-8 mb-4 card-progress rounded text-start">
                <h3 class="prim">Sepertinya Kamu Belum Mulai Belajar...</h3>
                <p>Yuk mulai belajar Al Qur’an agar kita semakin dekat dengan Allah SWT</p>
                <form class="d-flex justify-content-start" role="#">
                    <button class="btn btn-prim" type="submit">Mulai Belajar</button>
                </form>
            </div>
        </div>
    </section>
@endsection