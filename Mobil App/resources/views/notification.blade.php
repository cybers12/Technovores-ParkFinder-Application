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
                        <h5 class="mb-0">Notification</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <a href="{{ url("/notification") }}" class=" btn btn-40 btn-link" >
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>
                    </a>
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
                <div class="card">
                    <div class="card-body px-0">
                        <div class="list-group list-group-flush">
                            @foreach ($notifications as $item)
                                <a class="list-group-item" href="{{ url("#") }}">
                                    <div class="row">
                                        <div class="col-auto align-self-center">
                                            <i class="material-icons text-default">check_circle</i>
                                        </div>
                                        <div class="col pl-0">
                                            <div class="row mb-1">
                                                <div class="col">
                                                    <p class="mb-0">{{$item->title}}</p>
                                                </div>
                                                <div class="col-auto pl-0">
                                                    <p class="small text-secondary">{{$item->date}}</p>
                                                </div>
                                            </div>
                                            <p class="small text-secondary">{{$item->content}}</p>
                                        </div>

                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
