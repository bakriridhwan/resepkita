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
                <div class="card-header">PESAN</div>
                <div class="card-body">
                    {{-- You are Admin. --}}



                    <table class="table">
                        <h5>Data pesan dari pengunjung</h5>


                        {{-- <form class="form" method="get" action="/search">
                            <div class="form-group w-100 mb-3">
                                <label for="search" class="d-block mr-2">Pencarian</label>
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword" autofocus>
                                <button type="submit" class="btn btn-primary mb-1">Cari</button>
                            </div>
                        </form> --}}
                        <!-- Start kode untuk form pencarian -->
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif


                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Dikirim Pada</th>
                            {{-- <th scope="col">Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $p)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->pesan }}</td>
                            <td>{{ $p->created_at }}</td>
                            {{-- <td>
                                <a href="/users/destroy/{{ $u->id }}" class="badge badge-danger" onclick="return confirm('Yakin dihapus?')">delete</a>
                            </td> --}}

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
