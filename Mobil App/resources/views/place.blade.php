@extends('layouts.main')
@section('context')

<style>
    .centerElmts{
display: flex;
align-items: center;
justify-content: center;
}

.Parking{
background-color: #6c757d;
width: 100%;
min-height: 400px;
}
.rowsParking{

width: 100%;
height: 200px;
display: flex;

padding: 25px 35px;
}

.inUsed{
background-color: #dc3545;
}
.free{
background-color: #28a745;
}
.reserved{
background-color: #ffc107;
}

.rowsParking:first-child{

border-bottom: 2px dashed white;
}
.rowsParking:nth-child(2){

border-bottom: 2px dashed white;
}
.rowsParking span{
width: 20%;
height:100%;
display: flex;
align-items: center;
justify-content: center;
font-size: 18px;
border: 2px solid white;
}
.rowsParking:first-child span{
transform: skew(-10deg);
}
.rowsParking:nth-child(2) span{
transform: skew(10deg);
}
.rowsParking:nth-child(3) span{
transform: skew(-10deg);
}
</style>
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
                        <h5 class="mb-0">Choose your place</h5>
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
                            Choose your place
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="Parking">
                            <div class="rowsParking">
                                <span class="inUsed" style="margin-left: -15px;">A1</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">A2</button></span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">A3</button></span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">A4</button></span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">A5</button></span>
                                <span class="reserved">A6</span>
                                <span class="reserved">A7</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">A8</button></span>
                                <span class="inUsed">A9</span>
                            </div>
                            <div class="rowsParking">
                                <span>9</span>
                                <span class="inUsed">10</span>
                                <span>11</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">12</button></span>
                                <span class="inUsed">13</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">14</button></span>
                                <span class="reserved">15</span>
                                <span>16</span>
                                <span>17</span>
                            </div>
                            <div class="rowsParking">
                                <span>18</span>
                                <span class="inUsed">19</span>
                                <span>20</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">21</button></span>
                                <span>22</span>
                                <span class="free"><button onclick="window.location.href = '{{ url('/reservation') }}';" style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; margin: -5px;">23</button></span>
                                <span class="reserved">24</span>
                                <span>25</span>
                                <span>26</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
