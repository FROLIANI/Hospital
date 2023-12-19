<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\comment;
use App\Models\Doctor;
use App\Models\leavmessage;
use Illuminate\Http\Request;


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

    public function showappointments()
    {
        $data = Appointment::all();
        return View('auth.admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();

        return redirect()->back();
    }


    public function canceled($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = Doctor::all();
        return View('auth.admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updatedoctor($id)
    {
        $data = Doctor::find($id);
        return View('auth.admin.update_doctor',  ['data' => $data]);
    }

    public function editdoctor(Request $request, $id)
    {
       $doctor = Doctor::find($id);

       $doctor->name = $request->name;

       $doctor->phone = $request->phone;

       $doctor->room = $request->room;

       $doctor->specility = $request->specility;

       //save data
       $doctor->save();

       return redirect()->back()->with('message','Doctor Updated successfully');
    }

    //received message
    public function received()
    {
        $receivedata = leavmessage::all();

        return View('auth.admin.messagereceived', compact('receivedata'));

    }

    //get the comment from the customer
    public function getcomment()
    {
        $receivecomment = comment::all();
        return view('auth.admin.getcomment', compact('receivecomment'));

    }

    //Delete comment
    public function deletecomment($id)
    {
        $deletedata = Comment::find($id);
        $deletedata->delete();
        return redirect()->back();
    }
}
