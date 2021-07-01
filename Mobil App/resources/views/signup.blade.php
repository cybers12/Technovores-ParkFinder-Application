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
                    <a href="{{ url("/login") }}" class="text-white">
                        Login
                    </a>
                </div>
            </div>
        </header>


        <div class="container h-100 text-white">
            <div class="row h-100">
                <div class="col-12 align-self-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                            <h2 class="font-weight-normal mb-5">Create new<br>account with us</h2>
                            <form method="POST" action='{{ url("/thank_you") }}'  enctype="multipart/form-data">
                                @csrf
                                @error('FirstName')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label active">
                                    <input type="text" name="FirstName" class="form-control text-white">
                                    <label class="form-control-label text-white">First Name *</label>
                                </div>
                                @error('LastName')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label active">
                                    <input type="text" name="LastName" class="form-control text-white">
                                    <label class="form-control-label text-white">Last Name *</label>
                                </div>
                                @error('email')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label active">
                                    <input type="text" name="email" class="form-control text-white" value="benbachirfatimazahra@parkfinder.com">
                                    <label class="form-control-label text-white">Email *</label>
                                </div>
                                <div class="form-group float-label active">
                                    <input type="text" name="NumberPhone" class="form-control text-white">
                                    <label class="form-control-label text-white">Number Phone</label>
                                </div>
                                <div class="form-group float-label active">
                                    <input type="text" name="address" class="form-control text-white">
                                    <label class="form-control-label text-white">Address</label>
                                </div>
                                @error('password')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label position-relative">
                                    <input type="password" name="password" class="form-control text-white ">
                                    <label class="form-control-label text-white">Password *</label>
                                </div>
                                @error('confirmation')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group float-label position-relative">
                                    <input type="password" name="confirmation" class="form-control text-white ">
                                    <label class="form-control-label text-white">Confirm Password *</label>
                                </div>
                                <br/>
                                <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" name="avatar">
                                    @error('avatar')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <label class="custom-file-label" for="validatedCustomFile" style="background-color: #3629b7; color: #fff !important;">Choose a picture ...</label>
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
                <button type="submit" class="btn btn-default rounded btn-block">Sign up</a>
            </div>
        </div>
    </div>
</form>
@endsection
