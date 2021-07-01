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
                </div>
            </div>
        </header>

        <!-- page content start -->
        <div class="container mt-3 mb-4 text-center">
            <h4 class="text-white">A verification code has been sent to you by email. </h4>
            <!-- <p class="text-white mb-4">Please enter your verification code</p> -->
        </div>
        <div class="main-container">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ url("/thank_you") }}">
                            @csrf
                                <div class="form-group float-label mb-0">
                                    <input type="code" class="form-control" autofocus="">
                                    <label class="form-control-label">Please enter your verification code</label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block rounded">Verify</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </main>
@endsection
