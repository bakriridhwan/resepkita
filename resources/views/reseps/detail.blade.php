@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-8"> --}}
            {{-- <div class="card"> --}}

                {{-- <div class="card-header justify-content-between">
                    <a href="/reseps" class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
                        {{ __('DETAIL REQUEST') }}
                </div> --}}

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{-- {{ __('You are logged in!') }} --}}

                    {{-- <h2>Detail</h2>

                        <div class="card">
                            <div class="card-body">
                                <h5><b>Judul : </b>{{ $resep->judul }}</h5>
                                <h5><b>Gambar : </b><img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$resep->gambar}}"></h5>
                                <br>
                                <h5><b>Bahan : </b>{!! $resep->bahan !!}</h5>
                                <h5><b>Alat : </b>{!! $resep->alat !!}</h5>
                                <h5><b>Langkah : </b>{!! $resep->langkah !!}</h5>

                            </div>
                        </div> --}}



                        {{-- <div class="row">
                            <div class="col-md-7">

                                <form action="/komen" method="POST">
                                    @csrf
                                    <div class="mb-3 mt-4">
                                        <label for="komen" class="form-label">Komentar</label>
                                        <input type="text" class="form-control" id="komen" name="komen" placeholder="komentar">
                                    </div>
                                    <button class="btn btn-primary btn">Komen</button>

                                </form>
                            </div>
                        </div> --}}

                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}


<div class="container">
    <div class="row justify-content-center">
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



                            @if ($resep->keterangan == 'diterima')
                                <div class="alert alert-success" role="alert">
                                Selamat, resep Anda telah dipublikasikan
                                </div>
                            @elseif ($resep->keterangan == 'ditolak')
                                <div class="alert alert-danger" role="alert">
                                Maaf, resep Anda belum dapat dipublikasikan. Silakan mencoba lagi.
                                </div>
                            @elseif ($resep->keterangan == 'evaluasi')
                                <div class="alert alert-warning" role="alert">
                                Silakan menunggu, resep Anda sedang dievaluasi
                                </div>
                            @endif


                            <br>
                            <a class="btn btn-secondary btn-sm" href="/reseps">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection
