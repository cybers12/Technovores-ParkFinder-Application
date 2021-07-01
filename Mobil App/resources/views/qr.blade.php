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
                <h6 class="mb-1">Errica Johnson</h6>
                <p class="small text-default-secondary">London, UK</p>
            </div>
        </div>
        <div class="menu-container">
            <div class="row mb-4">
                <div class="col">
                    <h4 class="mb-1 font-weight-normal">$ 1548.00</h4>
                    <p class="text-default-secondary">My Balance</p>
                </div>
                <div class="col-auto">
                    <button class="btn btn-default btn-40 rounded-circle" data-toggle="modal" data-target="#addmoney"><i class="material-icons">add</i></button>
                </div>
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
                    <button class="btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="{{ url("#") }}">
                        <h5 class="mb-0">QR-Code</h5>
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
        <br/><br/><br/>

        <div class="main-container h-50" style="margin-top: -60px;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center my-3 mx-auto">
                        <div class="icon icon-100 bg-success-light text-success rounded-circle mb-3">
                            <i class="material-icons display-4">check</i>
                        </div>
                        <h2>Congratulation!</h2>
                        <h6 class="text-secondary mb-3">Your place has been reserved successfully!</h6>
                        <p class="text-secondary">Thank you for choosing ParkFinder.</p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="main-container h-50">
            <div class="container mt-3 mb-4 text-center">
                <p class="text-default-secondary">Ask to scan this QR-Code<br>to accept money </p>
                <div class="avatar avatar-120 ">
                    <div class="background" id="qrcode">

                    </div>
                </div>

                <h2 style="margin-right: 120px;"><img src="img/TechCoins1.png" style="width:25px; float: left; margin-left: 120px; margin-top: 7px;" />
                     50</h2>
                <p class="text-secondary">Total Price</p>
            </div>
        </div>
    </main>

    <script>

        var qrcode = new QRCode("qrcode",
        { text: "{id:1,matricule:'23/jgfhd'}",
         width: 128,
          height: 128,
           colorDark : "#000000",
            colorLight : "#ffffff",
             correctLevel : QRCode.CorrectLevel.H
             });
    </script>
@endsection
