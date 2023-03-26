@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Materi</h1>
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
                            <form action="{{route('materi.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="materi">Nama Materi</label>
                                    <input type="text" class="form-control" name="nama_materi" placeholder="Contoh: Pengantar Materi" value="{{old('nama_materi')}}">
                                </div>
                                <div class="form-group">
                                    <label for="kategori_id">Kategori</label>
                                    <select name="kategori_id" required class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">
                                                {{$item->nama_kategori}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Max: 2MB</label>
                                    <input type="file" name="image" class="form-control" placeholder="Max: 2MB">
                                </div>
                                <div class="form-group">
                                    <label for="audio">Voice Notes Max: 2MB</label>
                                    <input type="file" name="audio" class="form-control" placeholder="Max: 2MB">
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