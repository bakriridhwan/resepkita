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


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">REQUEST</div>
                <div class="card-body">
                    {{-- You are Admin. --}}



                    <table class="table">
                        <h5>Request resep dari user</h5>


                        <!-- Start kode untuk form pencarian -->



                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('tolak'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('tolak') }}
                            </div>
                        @endif

                        @if (session('revisi'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('revisi') }}
                            </div>
                        @endif

                        @if (session('delete'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('delete') }}
                            </div>
                        @endif

                        @if (session('arsip'))
                            <div class="alert alert-success" role="alert">
                                {{ session('arsip') }}
                            </div>
                        @endif

                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Resep</th>
                            <th scope="col">Gambar</th>
                            {{-- <th scope="col">Gambar</th> --}}
                            <th scope="col">Aksi</th>
                            {{-- <th scope="col">Keterangan</th> --}}
                            <th scope="col">Pengirim</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reseps as $r)

                            @if ($r->arsip == 'tidak')
                                <tr>
                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/gambar_resep'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>
                                <a href="/admin/reseps/{{ $r->id }}" class="badge badge-dark">detail</a>
                                <a href="/terima/{{ $r->id }}" class="badge badge-success" onclick="return confirm('Yakin diterima?')">terima</a>
                                <a href="/tolak/{{ $r->id }}" class="badge badge-warning" onclick="return confirm('Yakin ditolak?')">tolak</a>
                                {{-- <a href="/revisi/{{ $r->id }}" class="badge badge-info" onclick="return confirm('Yakin revisi?')">revisi</a> --}}
                                {{-- <a href="/admin/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin dihapus?')">delete</a> --}}
                                {{-- <a href="/admin/arsip/{{ $r->id }}" class="badge badge-secondary" onclick="return confirm('Yakin diarsip?')">arsip</a> --}}
                            </td>
                            {{-- <td>{{ $r->keterangan }}</td> --}}
                            <td><b>{{ $r->user->name }}</b></td>

                            </tr>
                            @endif


                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
