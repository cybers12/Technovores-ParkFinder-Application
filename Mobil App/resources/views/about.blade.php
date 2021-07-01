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

 <!-- menu main -->
 <div class="main-menu">
    <div class="row mb-4 no-gutters">
        <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
        <div class="col-auto">
            <div class="avatar avatar-40 rounded-circle position-relative">
                <figure class="background">
                    <img src="img/user1.png" alt="">
                </figure>
            </div>
        </div>
        <div class="col pl-3 text-left align-self-center">
            <h6 class="mb-1">BENBACHIR HASSANI Fatima Zahra</h6>
            <p class="small text-default-secondary">Casablanca, MAR</p>
        </div>
    </div>
    <div class="menu-container">
        <div class="row mb-4">
            <div class="col">
                <h4 class="mb-1 font-weight-normal">ParkFinder</h4>
            </div>
        </div>

        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url("/") }}">
                    <div>
                        <span class="material-icons icon">account_balance</span>
                        Home
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/about") }}">
                    <div>
                        <span class="material-icons icon">info</span>
                        About Us
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/map") }}">
                    <div>
                        <i class="material-icons icon">map</i>
                        MAP
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/balance") }}">
                    <div>
                        <i class="material-icons icon">account_balance_wallet</i>
                        Balance
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/profile") }}">
                    <div>
                        <i class="material-icons icon">account_circle</i>
                        Profile
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("/pages") }}">
                    <div>
                        <span class="material-icons icon">layers</span>
                        Pages
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
        <div class="text-center">
            <a href="{{ url("/login") }}" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
        </div>
    </div>
</div>
<div class="backdrop"></div>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="{{ url("#") }}">
                        <h5 class="mb-0">About Us</h5>
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
            <div class="container mt-4 text-center">
                <h6 class="text-secondary mb-0">We are</h6>
                <h1 class="display-4 mb-0">ParkFinder</h1>
                <h5 class="text-secondary">The best parking space reservation application</h5>
                <br>
                <p class="text-secondary">For all the people who waste hours<br/> to find a place to place their vehicle</p>
            </div>
            <div class="container-fluid mt-4 bg-dark text-white">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <img src="img/Logo F Blanc.png" style="width: 150px; margin-left: 95px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <h4>Who are we?</h4>
                <p class="text-secondary mt-3">EXCEPTIONS GUYS is a web development company, young expert and composed of a team of computer engineers.<br/>
                    She decided to market a new solution
                    called “PARKFINDER” to respond to the current coronavirus situation and avoid any contact of payment, as well as to respond to the major parking problem, particularly in large cities.</p>
                <h4>Why choose ParkFinder?</h4>
                <p class="text-secondary mt-3">Cashless. Ticketless. Stress-free.<br/>
                    With PARKFINDER you can pay for street parking
                    and in parking lots. No need to look for change and
                    run to the parking meter. Simply pay cashless and without
                    ticket with the PARKFINDER application.</p>
            </div>


        </div>
        <br/><br/><br/><br/>
    </main>


    <!-- footer-->
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="{{ url("/") }}" class="">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url("/about") }}" class="active">
                    <i class="material-icons">info</i>
                    <p>About Us</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url("/map") }}" class="">
                    <i class="material-icons">map</i>
                    <p>Map</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url("/balance") }}" class="">
                    <i class="material-icons">account_balance_wallet</i>
                    <p>Balance</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{ url("/profile") }}" class="">
                    <i class="material-icons">account_circle</i>
                    <p>Profile</p>
                </a>
            </div>
        </div>
    </div>
@endsection
