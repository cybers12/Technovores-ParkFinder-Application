<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            $reservations=Reservation::where('username', Auth::user()->username)->orderBy('id', 'DESC')->get();
            $reservationsCount=Reservation::where('username', Auth::user()->username)->count();
            $users=User::all()->where('username', Auth::user()->username);
            $amount=Reservation::where('username', Auth::user()->username)->sum('amount');

            // $userConnect=User::where('username', Auth::user()->username);
            //dd($amount);
        return view ('index', ['reservations' => $reservations, 'reservationsCount' => $reservationsCount, 'users' => $users, 'amount' =>$amount]);
        }else{
            return view('login');
        }
//dd($profile_status);

    }
    public function update(Request $request, $id){

        if($request->new_password==$request->confirmation){
            $user=User::find($id);
            $user->password=Hash::make($request->input('new_password'));
            $user->update();
            return redirect('profile')->with('status','Your data change success');

        }
        else{
            return back()->with('status', 'Your password confimation is not similare to your password');
        }

    }

}
