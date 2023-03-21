@extends('layout.app')

@section('title')
    Home - yukngaji
@endsection

@section('content')
    <section class="container mt-5 hero">
        <div class="row product-grid" data-aos="fade-up">
            <div class="col-lg-3 mb-4 card-side-profil rounded">
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-sec d-block" type="" href="{{ route('profil') }}">Profil</a>
                </div>
                <div class="text-center pt-1 mb-2 pb-1">
                    <a class="btn btn-prim d-block" type="" href="{{ route('progres') }}">Progress</a>
                </div>
                <form action="{{url('logout')}}" method="POST" class="text-center pt-1 mb-2 pb-1 d-block">
                        @csrf
                        <div class="">
                            <button class="btn btn-logout d-block" type="submit">Logout</button>
                        </div>
                </form>
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