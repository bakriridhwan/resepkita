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
            <div class="row justify-content-center mt-5">
                <div class="col-sm-9 mb-4">
                    <h3 class="text-center">Detail Resep</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <div class="card-header text-center"><h4>{{$resep->judul}}</h4></div>

                            <img class="img-fluid mb-3" style="min-width: 100%;" src="<?= URL::to('/gambar_resep'); ?>/{{$resep->gambar}}">
                            <h3>Bahan - bahan</h3>
                            {!!$resep->bahan!!}
                            <h3>Alat - alat</h3>
                            {!!$resep->alat!!}
                            <h3>Langkah</h3>
                            {!!$resep->langkah!!}

                            <br>
                            <a class="btn btn-secondary btn-sm" href="/reseps/admin">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
