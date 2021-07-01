<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function confirm_account(Request $request) {

            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:3',
                'avatar' => 'sometimes|image',
                'FirstName' =>'required|max:20',
                'LastName' =>'required|max:20',
                'NumberPhone' =>'required|max:15',
                'address'=>'required',

            ]);

            if($request->password == $request->confirmation){

                $user = new User;
            $user->Email=$request->email;
            $user->FirstName=$request->FirstName;
            $user->LastName=$request->LastName;
            $user->username=$request->FirstName." ".$request->LastName;
            $user->NumberPhone=$request->NumberPhone;
            $user->address=$request->address;


            $user->password=Hash::make($request->password);



    //Uplod de l'img
            if (request()->hasFile('avatar')) {
                $avatar = request()->file('avatar')->getClientOriginalName();
                request()->file('avatar')->storeAs('public',$user->id . '/' . $avatar, '');
               // $user->update(['avatar'=>$avatar]);
                //dd($avatar);
                $user->avatar=$avatar;
                   // dd($file);

               /* $extension = $file->getClientOriginalExtension();
                $filename = $user->name . '.' . $extension;
                $file->move('ltr/users/', $filename);
                $user->photo = $filename;*/
            }else{
                $avatar='default_user.png';
                $user->avatar=$avatar;
            }

     //fin uplod

            $user->save();

            return view('thank_you')->with('status','User added successfully');
            }  else{
                return back()->with('error','Password error');
            }
        }
        public function checklogin(Request $request){

            $validated = $request->validate([
               'email' => 'required|email',
               'password' => 'required|min:3'
           ]);

            $user_data = array(
               'Email'  => $request->get('email'),
               'password' => $request->get('password')
           );
          // $db_data = Client::where('email',$request->get('email'));
           //dd($db_data);
           //print_r($db_data);

              if(Auth::attempt($user_data))
              {
               return redirect('/');
              }
              else
              {
               return back()->with('error', 'Incorrect credentials');
              }

       }
        public function logout(){
            Auth::logout();
            return view('login');
        }
        public function thank_you(){
            return view('thank_you');
        }
    }

