<?php

namespace App\Http\Controllers;
use App\Models\Notifications;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class BalanceController extends Controller
{

        public function balance(Request $request, $id){

            if(Auth::check()){
                $user=User::find($id);
                $user->balance=$user->balance+$request->input('inc_sold');
                $user->update();


                $notification = new Notifications;
                $notification->title='Balance has been added';
                $notification->content='Your account has been successfully recharged.';
                $date = Carbon::now()->toDateTimeString();
                $notification->date=$date;
                $notification->username=Auth::user()->username;
                $notification->save();


                $users= User::all()->where('username', Auth::user()->username);

                return redirect('/balance')->with('users',$users);
            }else{
                return view('login');
            }

            //return view('balance', ['User'=>$users]);

        }

        public function balance_view(){
            if(Auth::check()){
            $users= User::all()->where('username', Auth::user()->username);
            return view('balance')->with('users', $users);
        }else{
            return view('login');
        }
        }

}
