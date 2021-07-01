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
                        <h5 class="mb-0">Pages</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto">
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
                            <a href="{{ url("/landing") }}" class="list-group-item list-group-item-action border-color">Landing</a>
                            <a href="{{ url("/signup") }}" class="list-group-item list-group-item-action border-color">Signup</a>
                            <a href="{{ url("/login") }}" class="list-group-item list-group-item-action border-color">Login</a>
                            <a href="{{ url("/") }}" class="list-group-item list-group-item-action border-color">Home</a>
                            <a href="{{ url("/about") }}" class="list-group-item list-group-item-action border-color">About us</a>
                            <a href="{{ url("/map") }}" class="list-group-item list-group-item-action border-color">Map</a>
                            <a href="{{ url("/neveda_datail") }}" class="list-group-item list-group-item-action border-color">Parking Nevada</a>
                            <a href="{{ url("/mohamedV") }}" class="list-group-item list-group-item-action border-color">Parking Avenue Mohammed V</a>
                            <a href="{{ url("/george") }}" class="list-group-item list-group-item-action border-color">Parking George sand maarif</a>
                            <a href="{{ url("/el_behira") }}" class="list-group-item list-group-item-action border-color">Parking EL Behira</a>
                            <a href="{{ url("/twin") }}" class="list-group-item list-group-item-action border-color">Twin centre parking</a>
                            <a href="{{ url("/place") }}" class="list-group-item list-group-item-action border-color">Choose your parking space</a>
                            <a href="{{ url("/reservation") }}" class="list-group-item list-group-item-action border-color">Reservation</a>
                            <a href="{{ url("/qr") }}" class="list-group-item list-group-item-action border-color">Qr-Code</a>
                            <a href="{{ url("/balance") }}" class="list-group-item list-group-item-action border-color">Ballence</a>
                            <a href="{{ url("/profile") }}" class="list-group-item list-group-item-action border-color">Profile</a>
                            <a href="{{ url("/language") }}" class="list-group-item list-group-item-action border-color">Language</a>
                            <a href="{{ url("/security_settings") }}" class="list-group-item list-group-item-action border-color">Security Settings</a>
                            <a href="{{ url("/my_cards") }}" class="list-group-item list-group-item-action border-color">My Cards</a>
                            <a href="{{ url("/addcard") }}" class="list-group-item list-group-item-action border-color">Add Cards</a>
                            <a href="{{ url("/my_address") }}" class="list-group-item list-group-item-action border-color">My Address</a>
                            <a href="{{ url("/addaddress") }}" class="list-group-item list-group-item-action border-color">Add Address</a>
                            <a href="{{ url("/notification") }}" class="list-group-item list-group-item-action border-color">Notifications</a>
                            <a href="{{ url("/thank_you") }}" class="list-group-item list-group-item-action border-color">Thank you</a>
                            <a href="{{ url("/error") }}" class="list-group-item list-group-item-action border-color">Error</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
