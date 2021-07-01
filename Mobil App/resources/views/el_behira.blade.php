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
                        <h5 class="mb-0">Parking EL Behira</h5>
                    </a>
                </div>
                <!-- <div class="ml-auto col-auto">
                    <a href="profile.html" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="img/user1.png" alt="">
                        </figure>
                    </a>
                </div> -->
            </div>
        </header>

        <!-- page content start -->

        <div class="main-container">
            <div class="container">
                <div class="card mb-4">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="310" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=Parking%20EL%20Behira&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:150px;width:310px;}</style><a href="https://www.embedgooglemap.net">google embed map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:150px;width:310px;}</style></div></div>                        <div class="card-body">
                            <h6>Parking EL Behira</h6>
                            <address>
                                Rue Abderrahmane El Mkhanet,<br>
                                Casablanca 20250
                            </address>
                        </div>
                        <hr style="margin-top: -20px; margin-bottom: -5px;">
                        <div class="card-body" >
                            <h6> Number of empty places: 20</h6>
                        </div>
                        <hr style="margin-top: -20px; margin-bottom: -5px;">
                        <div class="card-body" >
                            <h6> Opening time: 09:00</h6>
                            <h6> Closing time: 22:00</h6>
                        </div>
                        <hr style="margin-top: -20px; margin-bottom: -5px;">
                        <div class="card-body" >
                            <h6> The price to pay per hour : 3 DH</h6><br/>
                            <button onclick="window.location.href = '{{ url('/place') }}';" type="button" class="btn btn-primary btn-block rounded">Reserve your place</button>
                        </div>


                </div>


            </div>
        </div>

    </main>
@endsection
