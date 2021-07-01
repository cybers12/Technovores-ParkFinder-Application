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
                        <h5 class="mb-0">Reservation</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto">
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
                    <div class="card-header">
                        <h6 class="subtitle mb-0">
                            <div class="avatar avatar-40 bg-primary-light text-primary rounded mr-2"><img src="img/IconP.png"> </div>
                            Reserve your parking space
                        </h6>
                    </div>
                    <div class="card-body">

                         <!-- <div class="form-group float-label active">
                            <select class="form-control">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                             </select>
                            <label class="form-control-label">Number of hours to stay in the parking</label>
                        </div> -->
                        <form method="POST" action='{{ url('/qr') }}'>
                            @csrf
                            <div class="form-group float-label active">
                            <select class="form-control" name="parking_name">
                                <option selected>PARKING NEVADA</option>
                                <option>Parking Avenue Mohammed V</option>
                                <option>Parking George sand maarif</option>
                                <option>Parking EL Behira</option>
                                <option>Twin centre parking</option>
                             </select>
                             <label class="form-control-label">Parking name</label>
                         </div>
                            <div class="form-group float-label active">
                                <input type="time" class="form-control" name="dateTime_start_reservation">
                                <label class="form-control-label">Arriving time</label>
                            </div>
                            <div class="form-group float-label active">
                                <input type="time" class="form-control" name="dateTime_end_reservation">
                                <label class="form-control-label">End time</label>
                            </div>
                            <div class="form-group float-label active">
                                <input type="date" class="form-control" name="date">
                                <label class="form-control-label">Date</label>
                            </div>
                            <div class="form-group float-label active">
                                <input type="text" class="form-control" name="Matricule">
                                <label class="form-control-label">Number of your vehicle</label>
                            </div>
                        </div>
                        <div class="card-body" >
                            <button type="submit" class="btn btn-primary btn-block rounded">Validate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
