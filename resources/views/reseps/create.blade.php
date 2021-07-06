
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

            </div>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POST DATA RESEP
                    <span><a href="/reseps" class="btn btn-sm btn-secondary" style="float: right;">Kembali</a></span>
                </div>
                <div class="card-body">
                    {{-- You are normal user. --}}



	            <h3>Daftarkan Resep Anda!</h3>
				<hr>
                {{-- {{ route('resep.store') }} --}}
				<form action="/reseps" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="judul">Judul Resep</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
						@error('judul')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
  					    <label for="formFile" class="form-label">Gambar</label>
  						<input type="file" class="form-control" id="gambar" name="gambar" value="{{old('gambar')}}">
						@error('gambar')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>


                    {{-- <label for="formFile" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option readonly> -- Pilih --</option>
                        <option value="1">Resep Masakan</option>
                        <option value="2">Resep Minuman</option>
                        <option value="3">Resep Cemilan</option>
                        @error('kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
                    </select> --}}

                     <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-control" id="kategori_id" name="kategori_id">
                            <option readonly selected disabled> --- Pilih --- </option>
                        @foreach ($kategoris as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                        @endforeach
                        </select>
                        @error('kategori_id')
							<div class="text-danger">{{$message}}</div>
						@enderror

                    </div>

                    <div class="form-group mt-4">
						<label for="bahan">Bahan - bahan</label>
						<textarea class="form-control" id="bahan" rows="15" name="bahan"></textarea>
						@error('bahan')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="alat">Alat - alat</label>
						<textarea class="form-control" id="alat" rows="5" name="alat"></textarea>
						@error('alat')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="langkah">Langkah - langkah</label>
						<textarea class="form-control" id="langkah" rows="5" name="langkah"></textarea>
						@error('langkah')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    {{-- {{ route('resep.index') }} --}}
					{{-- <a class="btn btn-primary mb-2" href="">Kembali</a> --}}
					<button type="submit" class="btn btn-primary mb-2 btn-sm" onclick="return confirm('Yakin ?')">Daftarkan Resep</button>
				</form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
