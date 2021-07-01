@extends('layouts.main')

@section('context')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="wallet">
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
    <main class="flex-shrink-0 main has-footer">
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
                        <h5 class="mb-0">Balance</h5>
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
        <div class="container mt-3 mb-4 text-center">
            <!-- <p class="text-default-secondary">Ask to scan this QR-Code<br>to accept money </p>
            <div class="avatar avatar-120 rounded mb-3">
                <div class="background">
                    <img src="img/QR.png" alt="">
                </div>
            </div> -->

            @foreach ($users as $total)
                <h2 class="text-white"><img src="img/TechCoins1.png" width="32px">{{$total->balance}}</h2>
            @endforeach
            <p class="text-white mb-4">Total Balance</p>
        </div>

        <div class="main-container">
            <div class="container mb-4">

                <h3 style="text-align: center; margin-top: 10px; margin-bottom: 15px; color: #212529;"><img src="img/TechCoins1.png" width="28px">10 = 1DH</h3>

                <div class="card">
                    <div class="card-header">
                        <h6 class="subtitle mb-0">
                            <div class="avatar avatar-40 bg-primary-light text-primary rounded"><span class="material-icons vm">add_money</span></div>
                            Recharge your parking balance
                        </h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/balance/{{Auth::user()->id}}">
                            @csrf
                            <div class="form-group float-label active">
                                <select name="inc_sold" class="form-control">
                                    <option selected>200</option>
                                    <option>500</option>
                                    <option>1000</option>
                                    <option>3000</option>
                                    <option>5000</option>

                                </select>
                                <label class="form-control-label">Choose an amount <img src="img/TechCoins1.png" width="18px" style="margin-top: -10px;"/></label>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-block btn-default rounded">Recharge</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
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
                <a href="{{ url("/about") }}" class="">
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
                <a href="{{ url("/balance") }}" class="active">
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
