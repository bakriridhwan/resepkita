
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
                <div class="card-header">EDIT DATA KATEGORI RESEP</div>
                <div class="card-body">
                    {{-- You are normal user. --}}



                {{-- {{ route('resep.store') }} --}}
				<form action="/kategori/update/{{ $kategori->id }}" method="POST" enctype="multipart/form-data">
					@csrf
                    @method('PUT')
					<div class="form-group">
						<label for="judul">Nama Kategori Resep</label>
						<input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{$kategori->nama_kategori}}">
						@error('nama_kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
  					    <label for="gambar_kategori" class="form-label">Gambar Kategori</label>
  						<input type="file" class="form-control" id="gambar_kategori" name="gambar_kategori">


                        @if ($kategori->gambar_kategori)

                        <p class="mt-2" style="margin-bottom: 0px">gambar yang sudah ada : </p>
                        <img class="img-fluid" src="<?= URL::to('/gambar_kategori'); ?>/{{$kategori->gambar_kategori}}">

                        @else
                        <p style="color: red;" class="mt-1">gambar belum ada</p>

                        @endif



						@error('gambar_kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>


                    <div class="mb-3">
                        <label for="deskripsi_kategori" class="form-label">Deskripsi Kategori</label>
                        <textarea class="form-control" id="deskripsi_kategori" name="deskripsi_kategori" rows="3">{{ $kategori->deskripsi_kategori }}</textarea>
                        @error('deskripsi_kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
                    </div>


					<a class="btn btn-secondary btn-sm mb-2" href="/kategori">Kembali</a>
					<button type="submit" class="btn btn-success mb-2 btn-sm" onclick="return confirm('Yakin diubah?')">Ubah Data</button>
				</form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
