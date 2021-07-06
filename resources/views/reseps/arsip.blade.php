@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usr">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                {{-- <a class="nav-link" href="/reseps/create">Post</a> --}}
                <a class="nav-link" href="/reseps">List Data</a>
                <a class="nav-link" href="/arsipUser">Arsip</a>

            </div>
            </div>
        </div>
    </nav>



    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h4 class="text-center">Data resep yang diarsip</h4>
            <div class="card mt-4">
                <div class="card-header">PENGAJUAN DITERIMA</div>
                <div class="card-body">
                    {{-- You are Admin. --}}



                    <table class="table">

                        @if (session('unarsip'))
                            <div class="alert alert-success" role="alert">
                                {{ session('unarsip') }}
                            </div>
                        @endif

                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Resep</th>
                            <th scope="col">Gambar</th>
                            {{-- <th scope="col">Keterangan</th> --}}
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reseps as $r)

                            @if ($r->keterangan == 'diterima')
                            <tr>
                                {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                <td>{{ $r->judul }}</td>
                                <td><img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$r->gambar}}" width="50px"></td>
                                {{-- <td>{{ $r->keterangan }}</td> --}}
                                <td>
                                    {{-- <a href="/arsip/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin ?')">delete</a> --}}
                                    <a href="/reseps/{{ $r->id }}" class="badge badge-info">detail</a>
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
                <div class="card-header">ARSIP</div>
                <div class="card-body">
                    You are Admin.






                </div>
            </div>
        </div>
    </div>

</div>
@endsection
