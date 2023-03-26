@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Kategori</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- Content Row -->
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="kelas">Nama Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" placeholder="Contoh: Pendahuluan" value="{{old('nama_kategori')}}">
                                </div>
                                <div class="form-group">
                                    <label for="kelas_id">Kelas</label>
                                    <select name="kelas_id" required class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        @foreach ($classes as $item)
                                            <option value="{{$item->id}}">
                                                {{$item->nama_kelas}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Save
                                </button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection