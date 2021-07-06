@extends('layouts.app')

@section('content')
<div class="container">


    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usr">User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                <a class="nav-link" href="/reseps/create">Post</a>
                <a class="nav-link" href="/reseps">List Data</a>

            </div>

            <div class="navbar-nav ml-auto">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                <a class="nav-link" href="/reseps">Table</a>
                <a class="nav-link" href="/reseps/card">Card</a>

            </div>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Request


                        <a href="/card" style="float: right;" class="btn btn-secondary btn-sm">kembali
                        </a>


                </div>
                <div class="card-body">
                    {{-- You are normal user. --}}


                    <div class="card">
                        <h4>{{ $resep->judul }}</h4>
                        <img class="card-img-top" src="<?= URL::to('/data_gambar'); ?>/{{$resep->gambar}}">
                        <div class="card-body">
                            <h5 class="card-title"><b>Bahan</b></h5>
                            <p class="card-text">{!! $resep->bahan !!}</p>
                            <h5 class="card-title"><b>Alat</b></h5>
                            <p class="card-text">{!! $resep->alat !!}</p>
                            <h5 class="card-title"><b>Langkah</b></h5>
                            <p class="card-text">{!! $resep->langkah !!}</p>

                            <p class="card-text"><span><b>status : </b></span> <span class="badge badge-primary">{!! $resep->keterangan !!}</span></p>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
