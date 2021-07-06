@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header justify-content-between">
                    <a href="/reseps" class="btn btn-outline-primary btn-sm">Kembali</a>
                        {{ __('Detail Request') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    <h2>Detail</h2>

                        <div class="card">
                            <div class="card-body">
                                <h5><b>Nama Makanan : </b>{{ $resep->namaresep }}</h5>
                                <h5><b>Pengirim : </b>{{ $resep->namapengirim }}</h5>
                                <h5><b>Deskripsi Resep : </b><br>{{ $resep->desresep }}</h5>
                                {{-- <h5><b>Gambar : </b><br>{{ $resep->gambar }}</h5> --}}

                            </div>
                        </div>



                        <div class="row">
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
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
