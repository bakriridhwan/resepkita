<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="contentt">
                <div class="title m-b-md">
                </div>

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}

            </div>
        </div>


        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="<?= URL::to('/assets/img'); ?>/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                </a>
                <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/welcomeKategori">Category</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/welcomeProfile">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcomeAbout">About</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            <div class="row mb-3 justify-content-center">
                <div class="col-md-12">
                    <div class="card mb-3">
                    <img src="<?= URL::to('/assets/img'); ?>/header.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Selamat Datang di ResepKita!</h3>
                        <p class="card-text">Temukan berbagai inspirasi memasak berbagai jenis masakan di sini!</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-md-12">
                    <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Kategori Teratas</h4>
                        <button type="button" class="btn btn-link">#olahan_ikan</button>
                        <button type="button" class="btn btn-link">#kue_kering</button>
                        <button type="button" class="btn btn-link">#minuman_tradisional</button>
                    </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>


        {{-- <div class="container">
            <hr>

                    <h4>ACC</h4>
                    @foreach($reseps as $r)

                    @if ($r->keterangan == 'diterima')

                    <div class="card mt-4 justify-content-center" style="display: inline-block;">
                        <img class="img-fluid" src="<?= URL::to('/data_gambar'); ?>/{{$r->gambar}}" width="300px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $r->judul }}</h5>

                            <a href="/welcome/reseps/{{ $r->id }}" class="btn btn-outline-primary btn-sm">detail</a>
                        </div>
                    </div>

                    @endif
                    @endforeach
        </div> --}}

    <div class="container">
        <div class="row">

            <h2 class="text-center mb-5">RESEP</h2>

            @foreach ($reseps as $r)

                @if ($r->keterangan == 'diterima')

                    <div class="col-sm-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center"><h3>{{$r->judul}}</h3></div>
                            <div class="card-body">

                                <img class="img-fluid mb-3" style="min-width: 100%;" src="<?= URL::to('/gambar_resep'); ?>/{{$r->gambar}}">
                                <br>
                                <a href="/welcome/reseps/{{ $r->id }}" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach
        </div>
    </div>





        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    </body>
</html>
