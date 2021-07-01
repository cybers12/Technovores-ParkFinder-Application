<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Notifications;
use App\Notifications\ReservationNotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;



class ReservationController extends Controller
{
    public function reservation(Request $request){
        $validated = $request->validate([
            'dateTime_start_reservation' => 'required',
            'dateTime_end_reservation' => 'required',
            'date' => 'required',
            'Matricule' => 'required|max:20',
        ]);

        $reservation = new Reservation;
        $reservation->username=Auth::user()->username;
        $reservation->dateTime_start_reservation=$request->dateTime_start_reservation;
        $reservation->dateTime_end_reservation=$request->dateTime_end_reservation;
        $reservation->date=$request->date;
        $reservation->Matricule=$request->Matricule;
        $reservation->parking_name=$request->parking_name;
        $reservation->amount=50;
        $reservation->save();

        $reservation_id = Reservation::where('parking_name',$request->parking_name && 'Matricule',$request->Matricule);


        $notification = new Notifications;
        $notification->title='Confirmation of reservation';
        $notification->content='Your place has been reserved successfully.Thank you for choosing ParkFinder';
        $date = Carbon::now()->toDateTimeString();
        $notification->date=$date;
        $notification->username=Auth::user()->username;
        $notification->save();
       // dd($reservation_id);
        return view('qr')->with('reservation_id',$reservation_id);

        //$reservation->notify(new ReservationNotification());

    }
}
