<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/balance', [BalanceController::class, 'balance_view'])->name('balance_view');
Route::post('/balance/{id}', [BalanceController::class, 'balance'])->name('balance');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/notification', [NotificationsController::class, 'notification'])->name('notification');


Route::get('/pages', function () {
    return view('pages');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
//Route::post('/confirm_account', [RegisterController::class, 'confirm_account'])->name('confirm_account');
Route::post('/index', [RegisterController::class, 'checklogin'])->name('checklogin');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::post('/thank_you', [RegisterController::class, 'confirm_account'])->name('confirm_account');


Route::get('/neveda_datail', function () {
    return view('neveda_datail');
});
Route::get('/mohamedV', function () {
    return view('mohamedV');
});
Route::get('/george', function () {
    return view('george');
});
Route::get('/el_behira', function () {
    return view('el_behira');
});
Route::get('/twin', function () {
    return view('twin');
});
Route::get('/place', function () {
    return view('place');
});
Route::get('/reservation', function () {
    return view('reservation');
});
//Route::post('/qr', [ReservationController::class, 'reservation'])->name('reservation');
Route::post('/qr', [ReservationController::class, 'reservation'])->name('reservation');

Route::put('/password-update/{id}', [HomeController::class, 'update'])->name('update');


Route::get('/language', function () {
    return view('language');
});
Route::get('/security_settings', function () {
    return view('security_settings');
});
Route::get('/my_cards', function () {
    return view('my_cards');
});
Route::get('/addcard', function () {
    return view('addcard');
});
Route::get('/my_address', function () {
    return view('my_address');
});
Route::get('/addaddress', function () {
    return view('addaddress');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/test', [TestController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
