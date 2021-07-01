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
                        <h5 class="mb-0">Add Card</h5>
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
                <div class="alert alert-danger">
                    <b>Ooops!</b> There is some error in data you have entered. Please enter correct details.
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="subtitle mb-0">
                            <div class="avatar avatar-40 bg-primary-light text-primary rounded mr-2"><span class="material-icons vm">credit_card</span></div>
                            Add Credit/PayPal card
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group float-label active">
                            <input type="text" class="form-control" value="212154525244">
                            <label class="form-control-label">Card Number</label>
                            <p class="form-text text-secondary text-right">Visa</p>
                        </div>
                        <div class="form-group float-label">
                            <input type="text" class="form-control is-invalid" autofocus>
                            <label class="form-control-label">Card Holder Name</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Please provide a valid card holder name.
                            </div>
                        </div>
                        <div class="form-group float-label active">
                            <div class="row">
                                <div class="col">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                        <option>2031</option>
                                        <option>2032</option>
                                    </select>
                                </div>
                            </div>
                            <label class="form-control-label">Expiry month and year</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-default rounded">Add Card</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
