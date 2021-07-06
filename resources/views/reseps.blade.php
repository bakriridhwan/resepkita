@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/adm">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                <a class="nav-link" href="/reseps">Request</a>
                <a class="nav-link" href="/recipes">Kelola Data</a>

            </div>
            </div>
        </div>
    </nav>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Request</div>
                <div class="card-body">
                    <table class="table">
                        <h5>Request resep dari user</h5>
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Makanan</th>
                            <th scope="col">Pengirim</th>
                            {{-- <th scope="col">Gambar</th> --}}
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reseps as $r)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $r->namaresep }}</td>
                            <td>{{ $r->namapengirim }}</td>
                            {{-- <td>{{ $r->gambar }}</td> --}}
                            <td>
                                <a href="/destroy/{{ $r->id }}" class="badge badge-danger">Hapus</a>
                                <a href="/reseps/{{ $r->id }}" class="badge badge-info">Detail</a>
                                <a href="/terima/{{ $r->id }}" class="badge badge-success">Terima</a>
                                <a href="" class="badge badge-warning">Tolak</a>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
