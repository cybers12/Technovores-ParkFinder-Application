@extends('layouts.main')
@section('context')
<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="landing">
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
    <main class="flex-shrink-0 main has-footer pt-2">

        <div class="container h-100">
            <!-- Swiper intro -->
            <div class="swiper-container introduction text-white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide overflow-hidden text-center">
                        <div class="row no-gutters h-100">
                            <div class="col align-self-center px-3">
                                <img src="img/location.svg" style="width: 278px; height: 186px;" alt="" class="mw-100 my-5">
                                <div class="row">
                                    <div class="container mb-5">
                                        <h4>Welcome to ParkFinder!</h4>
                                        <p>The mobile app to reserve your parking place </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden text-center">
                        <div class="row no-gutters h-100">
                            <div class="col align-self-center px-3">
                                <img src="img/Traveling.svg" style="width: 278px; height: 230px;" alt="" class="mw-100 my-5">
                                <div class="row">
                                    <div class="container mb-5">
                                        <h4>Multiple choice!</h4>
                                        <p>Several parking spaces are available, reserve the parking space you want with reasonable prices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide overflow-hidden text-center">
                        <div class="row no-gutters h-100">
                            <div class="col align-self-center px-3">
                                <img src="img/ride.PNG" style="width: 278px; height: 186px;" alt="" class="mw-100 my-5">
                                <div class="row">
                                    <div class="container mb-5">
                                        <h4>The best solution!</h4>
                                        <p>ParkFinder is the best solution to save your time and money lost to find a parking place</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- Swiper intro ends -->
        </div>
    </main>

    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
                <a href="{{ url("/login") }}" class="btn btn-default rounded btn-block">Login</a>
            </div>
            <div class="col">
                <a href="{{ url("/signup") }}" class="btn btn-outline-default rounded btn-block">Register</a>
            </div>
        </div>
    </div>
    @endsection
