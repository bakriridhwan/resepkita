@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/admin/home">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                <a class="nav-link" href="/users">Users</a>
                <a class="nav-link" href="/reseps/admin">Request</a>
                <a class="nav-link" href="/arsip">Arsip</a>
                <a class="nav-link" href="/kategori">Kategori</a>
                <a class="nav-link" href="/pesan">Pesan</a>

            </div>
            </div>
        </div>
    </nav>


    {{-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">KATEGORI RESEP</div>

            </div>
        </div>
    </div> --}}





    <div class="row justify-content-center mt-4">
        <div class="col-md-8">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

            <div class="card">
                <div class="card-header">DATA RESEP MAKANAN</div>
                <div class="card-body">
                    {{-- You are Admin. --}}
                    {{-- <h5>Resep Masakan</h5> --}}


                    <a href="/kategori/create" class="btn btn-success btn-sm">Tambah Data</a>

                    <table class="table mt-2">
                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Dibuat Sejak</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $k)

                            <tr>
                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                            <td>{{ $k->nama_kategori }}</td>
                            <td>{{ $k->created_at }}</td>
                            <td>
                                <a href="/kategori/{{ $k->id }}" class="badge badge-info">detail</a>
                                <a href="/kategori/edit/{{ $k->id }}" class="badge badge-warning">edit</a>
                                <a href="/kategori/destroy/{{ $k->id }}" class="badge badge-danger" onclick="return confirm('Yakin dihapus?')">delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resep Minuman</div>
                <div class="card-body">
                    You are Admin.
                    <h5>Resep Masakan</h5>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Masakan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reseps as $r)
                            @if ($r->kategori_id == 2)

                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>{{ $r->keterangan }}</td>
                            <td>
                                <a href="/users/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin dihapus?')">delete</a>
                            </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resep Cemilan</div>
                <div class="card-body">
                    You are Admin.
                    <h5>Resep Masakan</h5>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Masakan</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reseps as $r)
                            @if ($r->kategori_id == 3)

                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>{{ $r->keterangan }}</td>
                            <td>
                                <a href="/users/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin dihapus?')">delete</a>
                            </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
