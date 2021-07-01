@extends('layouts.main')
@section('context')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
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
                <a href="{{route('logout')}}" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
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
                        <h5 class="mb-0">Home</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <a href="{{ url("/notification") }}" class=" btn btn-40 btn-link" >
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>

                    </a>


                    {{-- @if($profile_status =='true') --}}
                    <a href="{{ url("/profile") }}" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="storage/{{Auth::user()->avatar}}" alt="">
                        </figure>
                    </a>
                {{-- @else
                @endif --}}
                </div>

            </div>
        </header>

        <div class="container mt-3 mb-4 text-center">
            <img src="img/LogoF.png" style="width: 150px; margin-top: -10px; " alt="">
        </div>

        <div class="main-container">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Reservation history</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                            @foreach ($reservations as $history)
                                <span class="list-group-item list-group-item-action border-color" style="margin-bottom: -4px; float: left;">{{$history->parking_name}}<p class="small text-secondary" style="float: right;">{{$history->date}}</p></span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Number of reservations: {{$reservationsCount}}</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                            <h6 class="list-group-item list-group-item-action border-color" style="color: #212529;">Total amount of reservations: <img src="img/TechCoins1.png" style="width:20px;" />{{$amount}}</h6>
                            @foreach ($users as $balance)
                                <h6 class="list-group-item list-group-item-action border-color" style="color: #212529; margin-top: -8px; margin-bottom: -5px;">Current balance: <img src="img/TechCoins1.png" style="width:20px;" />{{$balance->balance}}</h6>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br/>
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Time spent in parking lots</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                            <span class="list-group-item list-group-item-action border-color">Parking Nevada : 3H</span>
                            <span class="list-group-item list-group-item-action border-color">Parking Avenue Mohammed V: 5H</span>
                            <span class="list-group-item list-group-item-action border-color">Parking George sand maarif: 4H</span>
                            <span class="list-group-item list-group-item-action border-color">Parking EL Behira: 3H</span>
                            <span class="list-group-item list-group-item-action border-color">Twin centre parking: 5H</span>
                            <span class="list-group-item list-group-item-action border-color">Total: 20H</span>

                        </div>
                    </div>
                </div>

            </div>
        </div>



    </main>

    <!-- footer-->
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="{{ url("/") }}" class="active">
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
