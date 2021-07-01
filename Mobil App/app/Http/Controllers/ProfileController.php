<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        if(Auth::check()){
        $users = User::all()->where('username', Auth::user()->username);
        return view('profile')->with('users', $users);
        }else{
        return view('login');
    }
    }
}
