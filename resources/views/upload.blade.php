@extends('layouts.app')

@section('content')
<div class="container">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/usr">User</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                {{-- <a class="nav-link active" aria-current="page" href="/reseps">Dashboard</a> --}}
                <a class="nav-link" href="/upload">Upload</a>
                <a class="nav-link" href="/usrData">Data</a>

            </div>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post Data</div>
                <div class="card-body">
                    {{-- You are normal user. --}}




                    <h2>Form Request Resep</h2>
                    <div class="card">
                        <div class="card-body">
                            {{-- <span style="color: red;">NOTE</span> <br> <span>untuk bagian input <b>bahan</b> dan <b>langkah</b></span>

                            <p><span style="color: red;">*</span><span>jika bahan lebih dari kolom yang disediakan, tuliskan pakai koma saja di kolom paling akhir</span></p>
                            <p><span style="color: red;">*</span><span>jika bahan kurang dari kolom, biarkan saja tetap kosong</span></p> --}}

                        </div>
                    </div>

                    <form action="/reseps" method="POST" class="mt-4">
                        @csrf

                        <div class="mb-3">
                            <label for="namaresep" class="form-label">Nama Resep</label>
                            <input type="text" class="form-control" id="namaresep" name="namaresep" placeholder="Nama resep">
                        </div>

                        <div class="mb-3">
                            <label for="namapengirim" class="form-label">Nama Pengirim</label>
                            <input type="text" class="form-control" id="namapengirim" name="namapengirim" placeholder="Nama pengirim">
                        </div>

                        <div class="mb-3">
                            <label for="desresep" class="form-label">Deskripsi Resep</label>
                            <textarea class="form-control" id="desresep" name="desresep" rows="3"></textarea>
                        </div>

                        {{-- <h6 class="mt-4"><b>GAMBAR</b></h6>
                        <hr>
                        <div class="input-group">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            <button class="btn btn-outline-secondary" type="submit" id="gambar">Browse</button>
                        </div> --}}


                        {{-- <h6 class="mt-4"><b>BAHAN</b></h6>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="bahan1" class="form-label">Bahan 1</label>
                                    <input type="text" class="form-control" id="bahan1" name="bahan1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="bahan2" class="form-label">Bahan 2</label>
                                    <input type="text" class="form-control" id="bahan2" name="bahan2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="bahan3" class="form-label">Bahan 3</label>
                                    <input type="text" class="form-control" id="bahan3" name="bahan3">
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="desbahan" class="form-label">Jika ada bahan lain</label>
                            <textarea class="form-control" id="desbahan" rows="3"></textarea>
                        </div> --}}




                        {{-- <h6 class="mt-4"><b>ALAT</b></h6>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="alat1" class="form-label">Alat 1</label>
                                    <input type="text" class="form-control" id="alat1" name="alat1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="alat2" class="form-label">Alat 2</label>
                                    <input type="text" class="form-control" id="alat2" name="alat2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="alat3" class="form-label">Alat 3</label>
                                    <input type="text" class="form-control" id="alat3" name="alat3">
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="desalat" class="form-label">Jika ada alat lain</label>
                            <textarea class="form-control" id="desalat" rows="3"></textarea>
                        </div> --}}





                        {{-- <h6 class="mt-4"><b>LANGKAH</b></h6>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="langkah1" class="form-label">Langkah 1</label>
                                    <input type="text" class="form-control" id="langkah1" name="langkah1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="langkah2" class="form-label">Langkah 2</label>
                                    <input type="text" class="form-control" id="langkah2" name="langkah2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="langkah3" class="form-label">Langkah 3</label>
                                    <input type="text" class="form-control" id="langkah3" name="langkah3">
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="deslangkah" class="form-label">Jika ada langkah lain</label>
                            <textarea class="form-control" id="deslangkah" rows="3"></textarea>
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
