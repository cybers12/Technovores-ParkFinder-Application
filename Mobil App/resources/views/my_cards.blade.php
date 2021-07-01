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
                        <h5 class="mb-0">My Cards</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto">
                    {{-- <a href="/addcard" class="btn btn-40 text-white">
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
                <div class="card border-0 mb-4 bg-default text-white">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-40 border-0 bg-white-light rounded-circle text-white">
                                    <i class="material-icons vm text-template" style="margin-top: 8px;">credit_card</i>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <h6 class="mb-1">Visa</h6>
                                <p>Credit Card</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="mb-0 mt-3 ml-3">XXXX XXXX XXXX 0975</h4>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">26/21</p>
                                <p class="small ">Expiry date</p>
                            </div>
                            <div class="col-auto align-self-center text-right">
                                <p class="mb-0">{{Auth::user()->username}}</p>
                                <p class="small">Card Holder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-4 bg-warning text-white">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-auto">
                                <div class="avatar avatar-40 border-0 bg-white-light rounded-circle text-white">
                                    <i class="material-icons vm text-template" style="margin-top: 8px;">credit_card</i>
                                </div>
                            </div>
                            <div class="col pl-0">
                                <h6 style="margin-top: 10px;">Visa</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1 class="mb-0 mt-2" style="text-align: center;">PayPal</h1>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <p class="mb-0">13/23</p>
                                <p class="small ">Expiry date</p>
                            </div>
                            <div class="col-auto align-self-center text-right">
                                <p class="mb-0">{{Auth::user()->username}}</p>
                                <p class="small">Card Holder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
