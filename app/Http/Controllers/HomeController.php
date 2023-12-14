<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        $doctor = Doctor :: all();
        return View('auth.user.home', compact('doctor'));
    }


    // user login
    public function login()
    {

        return View('auth.login');
    }

    //New user register
    public function register()
    {
        return View('auth.register');
    }

    public function register_user(Request $request)
    {
        $user = new user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);  //Encrypt password

        //Save the user data and direct user to the login
        $user->save();
        return redirect('login');
    }

    public function login_user(Request $request)
    {
        $user = $request->only('email', 'password');

        if (Auth::attempt($user))
         {
            $logeduser = Auth::user();
            if ($logeduser->usertype == '0')
             {
                
                return View('auth.admin.admin');
            }
             else
              {
                $doctor = Doctor :: all();
                return View('auth.user.user',compact('doctor'));
            }
        } 
        else
         {
            
            return redirect()->back();
            
        }
    }

    //user make appointment
    public function appoint(Request $request)
    {
     $data  = new Appointment;

     $data->name = $request->name;

     $data->email = $request->email;

     $data->phone = $request->phone;

     $data->doctor = $request->doctor;

     $data->date = $request->date;

     $data->message = $request->message;

     $data->status = 'In Progress';

     if(Auth::id())
     {
     $data->user_id= Auth::user()->id;
     }
     
     $data->save();
     $doctor = Doctor::all();
     return View('auth.user.user',compact('doctor'));
    }
}
