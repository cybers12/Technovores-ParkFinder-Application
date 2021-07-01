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
                        <h5 class="mb-0">Add Address</h5>
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
                <div class="alert alert-success">
                    <b>Congratulations!</b> Your address has been saved to your adresss list successfully.
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="subtitle mb-0">
                            <div class="avatar avatar-40 bg-primary-light text-primary rounded mr-2"><span class="material-icons vm">add_location_alt</span></div>
                            Add your address
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group float-label active">
                            <input type="text" class="form-control">
                            <label class="form-control-label">Name</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control" autofocus>
                            <label class="form-control-label">Address line 1</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control">
                            <label class="form-control-label">Address line 2</label>
                        </div>
                        <div class="form-group float-label active">
                           <select class="form-control">
                               <option>Select Country</option>
                               <option selected>Morocco</option>
                            </select>
                            <label class="form-control-label">Country</label>
                        </div>
                        <div class="form-group float-label active">
                           <select class="form-control">
                               <option>Select City</option>
                               <option selected>Casablanca</option>
                            </select>
                            <label class="form-control-label">City</label>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control" >
                            <label class="form-control-label">Phone Number</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-default rounded">Add Address</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
