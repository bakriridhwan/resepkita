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
                <div class="card-header justify-content-between">
                    <a href="/reseps/admin" class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
                        {{ __('DETAIL RESEP') }}
                </div>
                <div class="card-body">
                    <div class="card">
                        <h5 class="card-title">{{ $resep->judul }}</h5>
                        <img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$resep->gambar}}">
                        <div class="card-body">
                            <p class="card-text">{!! $resep->bahan !!}</p>
                            <p class="card-text">{!! $resep->alat !!}</p>
                            <p class="card-text">{!! $resep->langkah !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


        <div class="container">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 mb-4 mt-4">
                <h2 class="text-center mb-5">Detail Kategori</h2>

                <div class="card mb-4">
                    <div class="row">
                        <div class="col-md-3 m-3">
                            <img class="img-fluid" src="<?= URL::to('/gambar_kategori'); ?>/{{$kategori->gambar_kategori}}">
                        </div>
                        <div class="col-md-7 m-3">
                            <h3><b>{{ $kategori->nama_kategori }}</b></h3>
                            <p>{{ $kategori->deskripsi_kategori }}</p>
                            <a href="/kategori" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

</div>
@endsection
