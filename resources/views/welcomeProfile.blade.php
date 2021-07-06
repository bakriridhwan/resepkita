<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
        rel="stylesheet"
        />


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
                    <a class="nav-link active" aria-current="page" href="welcomeProfile">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="welcomeAbout">About</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 mt-5 pt-5">
            <div class="row z-depth-3">
              <div class="col-sm-4 bg-info rounded-left">
                <div class="card-block text-center text-white">
                  <i class="fas fa-user-tie fa-7x mt-5"> </i>
                  <h2 class="font-weight-bold mt-4">Bima Bakri Fajar</h2>
                  <p> RESEPKITA </p>
                  <i class="far fa-edit fa-2x mb-4"> </i>
                </div>
              </div>
                <div class="col-sm-8 bg-white rounded-right">
                  <h3 class="mt-3 text-center"> INFORMATION </h3>
                  <hr class="badge-primary">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="font-weight-bold">Email :</p>
                      <h6 class="text-muted">bakribima@students.amikom.ac.id </h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="font-weight-bold">Phone :</p>
                      <h6 class="text-muted">088221445632</h6>
                    </div>
                  </div>
                  <h4 class="mt-3"> Resep Masakan </h4>
                  <hr class="bg-primary">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="font-weight-bold">Recent :</p>
                      <h6 class="text-muted">Resep Masakan Nila </h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="font-weight-bold">View :</p>
                      <h6 class="text-muted">Dinoter Bima</h6>
                    </div>
                    </div>
                    <hr class="bg-primary">
                    <ul class="list-unstyled d-flex justify-content-center mt-4">
                      <li> <a href="#"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                      <li> <a href="#"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                      <li> <a href="#"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>




  <!-- Awal_Footer -->
  <div class="container pt-3">
    <footer class="footer text-center">
          <p class="text-muted small mb-0">Copyright &copy; 2021 RESEPKITA. All rights reserved.</p>
        </div>
      </footer>







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
