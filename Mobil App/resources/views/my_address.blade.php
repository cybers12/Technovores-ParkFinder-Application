@extends('layouts.main')
@section('context')

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <img src="img/ParkFinder_Logo.png" style="border-radius: 10px;" alt="" class="w-100">
                    <h4 class="text-default">ParkFinder</h4>
                    <p class="text-secondary">Mobile app</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="{{ url("#") }}">
                        <h5 class="mb-0">My Address</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto">
                    {{-- <a href="/addaddress" class="btn btn-40 text-white">
                        <span class="material-icons vm" style="margin-top: 7px;">add</span>
                    </a> --}}
                    <a href="{{ url("/profile") }}" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="storage/{{Auth::user()->avatar}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>

        <!-- page content start -->

        <div class="main-container">
            <div class="container">
                <div class="card mb-4">
                    <div class="card-body">
                        <h6>{{Auth::user()->username}}</h6>
                        <address>
                            Belvedere <br>
                            boulevard oujda.<br>
                            Casablanca, Morocco
                        </address>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="address" class="custom-control-input" id="address1" checked>
                            <label class="custom-control-label" for="address1">Use this address</label>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="subtitle mb-0">{{Auth::user()->username}}</h6>
                    </div>
                    <div class="d-block h-150">
                        <iframe src="https://maps.google.com/maps?q=Belvedere%20boulevard%20oujda.Casablanca,%20Morocco&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="card-body">
                        <address>
                            Belvedere <br>
                            boulevard oujda.<br>
                            Casablanca, Morocco
                        </address>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="address" class="custom-control-input" id="address2">
                            <label class="custom-control-label" for="address2">Use this address</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
