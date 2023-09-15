<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect() {
        
        if(Auth::id()) {
            $user = Auth::user();
            if(Auth::user()->usertype=='0') {
                return view('user.home', compact('user'));
            }

            else {
                return view('admin.home');
            }

        }

        else {
         


            return redirect()->back();
        }
    }

    public function index() {
        return view('user.home');
    }

    public function book($id) {
        $periods = Period::all();
        return view('user.booking',compact('id','periods'));
    }

    public function reservation(Request $request) {
        $data = new Reservation;

        $data->date=$request->date;
        $data->comment=$request->comment;
        $data->user_id=$request->id;
        $data->period_id=$request->period;
        
        $data->save();
        return redirect('/home');
    }
}
