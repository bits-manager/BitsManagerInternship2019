<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class HallaboutController extends Controller
{
    public function index(Request $request)
    {
        
       $hall_id= $request->hall_id;

       $hall=DB::table('halls')
       	      ->join('states','states.id','=','halls.state_id')
           		->join('cities','cities.id','=','halls.city_id')
           		->join('townships','townships.id','=','halls.township_id')
           		->join('event_type_halls','event_type_halls.id','=','halls.township_id')
           		 ->where('halls.id', '=',$hall_id)

           		->select('halls.id','halls.hall_image','halls.hall_name','halls.phone_no','halls.open_time','halls.close_time','states.state_name','cities.city_name','townships.township_name','halls.address')
                ->get();


           $event = DB::table('event_type_halls')
                    ->join('halls', 'event_type_halls.hall_id', '=', 'halls.id')
                    ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
                    ->where('halls.id', '=',$hall_id)

                     ->select('event_type_halls.eventType_id','event_types.event_name','event_type_halls.image')
                    ->get();
                    
                   
      return view('frontend.hallabout.hallabout',compact('hall','event'));

        
    }
    
}

