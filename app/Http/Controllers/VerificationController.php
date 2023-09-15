<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Reservation;
use App\Rules\DateRule;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verifyDate(Request $request){

        $res_date=$request->res_date;
        $rule=[
            'res_date'=>[new DateRule],
        ];
            
            $date_validator=validator($request->all(),$rule);
            if($date_validator->fails()){
                return response()->json(['status'=>false,'errors'=>$date_validator->errors()]);
            } 
            // else{

            //     $res=null;
            //     $reservations_founded = Reservation::where('res_date',$res_date)->where('res_date',$res_date)->get();
			// 	$res_number=count($reservation_founded)


            //              if($reservation_founded){
            //                 // $meal=array_diff($meal,[$reservation_founded->meal]);
            //                 $res= response()->json(array("exists" => true,"meal"=>$meal,"table_id"=>$reservation_founded->table_id));
                    // }
                    else{
                              $res= response()->json(array("status" => true));
                         }

                                    return $res;

                // }

    }

    public function verifyPlace(Request $request){
        $res_date=$request->date;
        $period=$request->period;
        $places_coll=Period::where('id',$period)->get('places');
        $places=$places_coll[0]['places'];
        $rule=[
            'res_date'=>[new DateRule],
        ];
        
        $reserved=Reservation::where('date',$res_date)->where('period_id',$period)->get();
        $places_reserved=count($reserved);
            $is_avaliable= $places > $places_reserved ?? false;
            if(!$is_avaliable){
                return response()->json(['status'=>false,'msg_error'=>'there is no place avaliable for these schedule, please try an other time','places_av'=>$places,'places_rs'=>$places_reserved,'  reserved'=>  $reserved]);
            } 
                    else{
                              $res= response()->json(array("status" => true,'msg_done'=>'good','places_av'=>$places,'places_rs'=>$places_reserved,'  reserved'=>  $reserved));
                         }
                                    return $res;

    }
}
