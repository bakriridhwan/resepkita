
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
            </div>
        </div>
    </nav>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA RESEP</div>
                <div class="card-body">
                    {{-- You are normal user. --}}



	            <h3>Perbarui Resep</h3>
				<hr>
				<form action="/reseps/update/{{ $resep->id }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
					<div class="form-group">
						<label for="judul">Judul Resep</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{$resep->judul}}">
						@error('judul')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
  					    <label for="gambar" class="form-label">Gambar</label>
  						<input type="file" class="form-control" id="gambar" name="gambar">


                        @if ($resep->gambar)

                        <p class="mt-2" style="margin-bottom: 0px">gambar yang sudah ada : </p>
                        <img class="img-fluid" src="<?= URL::to('/gambar_resep'); ?>/{{$resep->gambar}}">

                        @else
                        <p style="color: red;" class="mt-1">gambar belum ada</p>

                        @endif



						@error('gambar_kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="bahan">Bahan - bahan</label>
						<textarea class="form-control" id="bahan" rows="15" name="bahan">{{$resep->bahan}}</textarea>
						@error('bahan')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="alat">Alat - alat</label>
						<textarea class="form-control" id="alat" rows="5" name="alat">{{$resep->alat}}</textarea>
						@error('alat')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="langkah">Langkah - langkah</label>
						<textarea class="form-control" id="langkah" rows="5" name="langkah">{{$resep->langkah}}</textarea>
						@error('langkah')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<a class="btn btn-secondary mb-2 btn-sm" href="/reseps">Kembali</a>
					<button type="submit" class="btn btn-success mb-2 btn-sm" onclick="return confirm('Yakin ?')">Perbarui Resep</button>
				</form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
