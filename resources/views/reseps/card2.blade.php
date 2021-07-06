

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

    @foreach ($reseps as $r)


                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <p>{{ $r->judul }}</p>
                        {{-- <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div> --}}
                        </div>
                    </div>
                </div>


                @endforeach







</div>
@endsection
