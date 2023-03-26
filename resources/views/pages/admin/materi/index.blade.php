@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Materi Pembelajaran</h1>
                        <a href="{{route('materi.create')}}" class="btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50">
                                Tambah Materi
                            </i>
                        </a>
                    </div>

                    
                    <!-- Content Row -->
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Materi</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Audio</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nama_materi}}</td>
                                                <td>{{$item->categories->nama_kategori}}</td>
                                                <td><img src="{{Storage::url($item->image)}}" alt="" width="150px" class="img-thumbnail"/></td>
                                                <td>{{$item->audio}}</td>
                                                <td>
                                                    <a href="{{route('materi.edit', $item->id)}}" class="btn btn-info">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{route('materi.destroy', $item->id)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection