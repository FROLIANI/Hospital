<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;
use App\Models\comment;
use App\Models\leavmessage;
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
        return redirect()->back()->with('message','Registered Successfully!. Go back to login');
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


     //Still dont show message but send the details

   return View('auth.user.user')->with(['doctor' => $doctor, 'message'
    => 'Appointment request submitted successfully! Soon We will contact with you' ]);

    }

// Request appointment
    public function myappoint()
    {

        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $appoint = Appointment::where('user_id',$userid)->get();
           return View('auth.user.myappointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
      
    }

    //Cancel appointment
    public function cancel_appointment($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function forgot()
    {
         return View('auth.forgot-password');
    }

    //Confirm password
    public function confirm()
    {
        return redirect()->back();
    }

    //function to leave message
    public function contact(Request $request)
    {
        $send  = new leavmessage();

        $send ->name = $request->name;

        $send ->email = $request->email;

        $send ->phone = $request->phone;

        $send ->subject = $request->subject;

        $send ->message = $request->message;

        $send->save();
        $doctor = Doctor::all();
        
        
        return View('auth.user.contact')->with(['doctor' => $doctor, 'message'
    => 'Appointment request submitted successfully! Soon We will contact with you' ]);

      
    }
    
    //Read more
    public function blog()
    {
        return View('auth.user.blog');
    }

    //Add comment
    public function addcomment(Request $request)
    {
        $addcoment  = new comment();

        $addcoment ->name = $request->name;

        $addcoment ->email = $request->email;

        $addcoment ->phone = $request->phone;

        $addcoment ->category = $request->category;

        $addcoment ->message = $request->message;

        $addcoment ->save();
       
        return redirect()->back()->with('message','Comment added successfully!');
    }


    //side bar
    public function about()
    {
        return View('auth.user.about');
    }

    public function sitedoctor()
    {
        return View('auth.user.sitedoctor');
    }

    public function news()
    {
        return View('auth.user.news');
    }

    public function appointment()
    {
        $doctor = Doctor::all();
        return View('auth.user.appointment', compact('doctor'));
    }


}
