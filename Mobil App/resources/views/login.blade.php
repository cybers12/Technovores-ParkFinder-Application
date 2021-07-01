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

                </div>
                <div class="ml-auto col-auto align-self-center">
                    <a href="{{ url("/signup") }}" class="text-white">
                        Sign up
                    </a>
                </div>
            </div>
        </header>


        <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="font-weight-normal mb-5">Login into<br>your account</h2>
                            <form method="POST" action='{{ url("/index") }}'>
                                @csrf
                                @error('email')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label active">
                                    <input type="text" class="form-control text-white" name="email" value="benbachirfatimazahra@parkfinder.com">
                                    <label class="form-control-label text-white">Email *</label>
                                </div>
                                @error('password')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label position-relative">
                                    <input type="password" name="password" class="form-control text-white">
                                    <label class="form-control-label text-white">Password *</label>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- footer-->
    <div class="footer no-bg-shadow py-3">
        <div class="row justify-content-center">
            <div class="col">
                <button type="submit" class="btn btn-default rounded btn-block">Login</button>
            </div>
        </div>
    </div>
</form>
@endsection
