<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;



class AdminController extends Controller
{
    //function of  Admin 
    public function addview()
    {
      return View('auth.admin.add_doctor');
    }



    public function upload(Request $request)
{
  
    try {
        $doctor = new Doctor();
        $doctor->name = $request->input('name');
        $doctor->phone = $request->input('phone');
        $doctor->room = $request->input('room');
        $doctor->specility = $request->input('specility');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('doctor', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->save();

        // Redirect to the form with a success message
        return redirect()->back()->with('message', 'Doctor added successfully');
    } catch (\Exception $e) {
        // Redirect to the form with an error message
        return redirect()->back()->with('error', 'An error occurred. Please try again.');
    }
}


}
