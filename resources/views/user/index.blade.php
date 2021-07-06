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
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Welcome, You are normal user.







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
