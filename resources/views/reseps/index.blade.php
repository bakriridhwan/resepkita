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
                {{-- <a class="nav-link" href="/arsipUser">Arsip</a> --}}

            </div>

            <div class="navbar-nav ml-auto">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                {{-- <a class="nav-link" href="/reseps">Table</a> --}}
                {{-- <a class="nav-link" href="/card">Card</a> --}}
                {{-- <a class="nav-link" href="/card2">Card2</a> --}}

            </div>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h4 class="text-center">Daftar request yang diajukan</h4>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

            <div class="card mt-4">
                {{-- <div class="card-header">DAFTAR REQUEST</div> --}}
                <div class="card-body">
                    {{-- You are normal user. --}}

                    <a href="/reseps/create" class="btn btn-success btn-sm">Ajukan Resep</a>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Resep</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Keterangan</th>
                            {{-- <th scope="col">Kategori</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($reseps as $r)


                            @if ($r->user->id == Auth::user()->id)

                            @if ($r->keterangan == 'evaluasi')

                            <tr>
                            {{-- <th scope="row">{{ $ }}</th> --}}
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/gambar_resep'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>
                                <a href="/reseps/{{ $r->id }}" class="badge badge-info">detail</a>
                                <a href="/reseps/edit/{{ $r->id }}" class="badge badge-success">edit</a>
                                <a href="/reseps/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin ?')">delete</a>
                            </td>
                            <td><b>{{ $r->keterangan }}</b></td>
                            {{-- <td><b>{{ $r->kategori_id->nama_kategori }}</b></td> --}}
                            {{-- <td><p>by {{ $r->user->name }}</p></td> --}}

                            </tr>

                            @endif

                            @endif
                            <?php $i++; ?>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">

                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}

            <div class="card">
                <div class="card-header">DATA RESEP DITERIMA</div>
                <div class="card-body">
                    {{-- You are Admin. --}}
                    {{-- <h5>Resep Masakan</h5> --}}


                    {{-- <a href="/kategori/create" class="btn btn-success btn-sm">Tambah Data</a> --}}

                    <table class="table mt-2">
                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Resep</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                            {{-- <th scope="col">Keterangan</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($reseps as $r)


                            @if ($r->user->id == Auth::user()->id)

                            @if ($r->keterangan == 'diterima')

                            <tr>
                            {{-- <th scope="row">{{ $ }}</th> --}}
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/gambar_resep'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>
                                <a href="/reseps/{{ $r->id }}" class="badge badge-info">detail</a>
                                {{-- <a href="/reseps/edit/{{ $r->id }}" class="badge badge-success">edit</a> --}}
                                {{-- <a href="/reseps/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin ?')">delete</a> --}}
                            </td>
                            {{-- <td><b>{{ $r->keterangan }}</b></td> --}}
                            {{-- <td><b>{{ $r->kategori_id->nama_kategori }}</b></td> --}}
                            {{-- <td><p>by {{ $r->user->name }}</p></td> --}}

                            </tr>


                            @endif

                            @endif
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">

                        {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif --}}

            <div class="card">
                <div class="card-header">DATA RESEP DITOLAK</div>
                <div class="card-body">
                    {{-- You are Admin. --}}
                    {{-- <h5>Resep Masakan</h5> --}}


                    {{-- <a href="/kategori/create" class="btn btn-success btn-sm">Tambah Data</a> --}}

                    <table class="table mt-2">
                        <thead>
                            <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col">Nama Resep</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                            {{-- <th scope="col">Keterangan</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($reseps as $r)


                            @if ($r->user->id == Auth::user()->id)

                            @if ($r->keterangan == 'ditolak')

                            <tr>
                            {{-- <th scope="row">{{ $ }}</th> --}}
                            <td>{{ $r->judul }}</td>
                            <td><img class="img-fluid" src="<?= URL::to('/gambar_resep'); ?>/{{$r->gambar}}" width="50px"></td>
                            <td>
                                <a href="/reseps/{{ $r->id }}" class="badge badge-info">detail</a>
                                <a href="/reseps/edit/{{ $r->id }}" class="badge badge-success">edit</a>
                                {{-- <a href="/reseps/destroy/{{ $r->id }}" class="badge badge-danger" onclick="return confirm('Yakin ?')">delete</a> --}}
                            </td>
                            {{-- <td><b>{{ $r->keterangan }}</b></td> --}}
                            {{-- <td><b>{{ $r->kategori_id->nama_kategori }}</b></td> --}}
                            {{-- <td><p>by {{ $r->user->name }}</p></td> --}}

                            </tr>


                            @endif

                            @endif
                            <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: red;"><b>NOTE</b></div>
                <div class="card-body">
                    <h5>Penjelasan Status <span><b>KETERANGAN</b></span></h5>
                    {{-- <p><span class="badge badge-info">evaluasi</span> : <b>Resep yang anda ajukan masih tahap pengamatan oleh admin dan sedang dievaluasi</b></p>
                    <p><span class="badge badge-info">diterima</span> : Resep yang anda ajukan diterima oleh admin, dan Resep dipublikasikan</p>
                    <p><span class="badge badge-info">revisi</span> : Resep yang anda ajukan perlu adanya revisi atau perbaikan</p>
                    <p><span class="badge badge-info">ditolak</span> : Resep yang anda ajukan ditolak oleh admin, silahkan mencoba mengajukan lagi</p> --}}

                    <div class="row">
                        <div class="col">
                            <span class="badge badge-info">evaluasi</span> :
                            <b>Resep yang Anda ajukan sedang dievaluasi oleh Admin, silakan menunggu.</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="badge badge-info">diterima</span> :
                            <b>Resep Anda telah disetujui oleh Admin dan telah dipublikasikan.</b>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <span class="badge badge-info">ditolak</span> :
                            <b>Resep Anda ditolak oleh Admin, Anda dapat memperbaruinya atau mengajukan resep yang baru.</b>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
