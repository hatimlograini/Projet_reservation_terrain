<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function showusers(){
        $data = DB::table('users')->where('usertype','0')->get();
        return view('admin.showusers',compact('data'));
    }

    public function deleteuser($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateuser($id){
        $data = User::find($id);
        return view('admin.updateuser',compact('data'));
    }

    public function edituser(Request $request, $id){

        $user = User::find($id);

        $user->name =$request->name;
        $user->prenom =$request->prenom;
        $user->email=$request->email;
        $user->phone =$request->phone;
        $user->address=$request->address;

        $user->save();

        return redirect()->back();
    }

    public function showreservations(){
        $periods = Period::all();
        $users = User::all();
        $reservations = Reservation::all();

        return view('admin.showreservation',compact('reservations','users','periods'));
    }

    public function delete_reservation($id){
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_reservation($id){
        $data = Reservation::find($id);
        $periods = Period::all();
        return view('admin.updatereservation',compact('data','periods'));
    }

    public function edit_reservation(Request $request, $id){
        $reservation = Reservation::find($id);

        $reservation->date =$request->date;
        $reservation->comment =$request->comment;
        $reservation->period_id =$request->period;

        $reservation->save();

        return redirect()->back();
    }

    public function view_periods(){
        $data = Period::all();
        return view('admin.view_periods',compact('data'));
    }

    public function delete_period($id){
        $data = Period::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function add_period_view(){
        return view('admin.add_period');
    }

    public function add_period(Request $request){
        $data = new Period;

        $data->period_time = $request->period_time;
        $data->places = $request->places;

        $data->save();
        return redirect()->back();
    }

    public function update_period_view($id){
        $data = Period::find($id);

        return view('admin.update_periods',compact('data'));
    }

    public function edit_period(Request $request, $id){
        $period = Period::find($id);

        $period->period_time =$request->period_time;
        $period->places =$request->places;

        $period->save();

        return redirect()->back();
    }
}
