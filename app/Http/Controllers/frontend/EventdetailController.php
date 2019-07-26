<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class EventdetailController extends Controller
{
    public function index(Request $request)                                               
    {  
		
       $eventType_id= $request->id;
       $data = DB::table('event_type_halls')
               ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
               ->join('halls', 'halls.id', '=', 'event_type_halls.hall_id')
               ->where('event_type_halls.id','=',$eventType_id)
               ->select('halls.hall_name','event_types.event_name','event_type_halls.image','event_type_halls.description')
               ->get();
     
        return view('frontend.eventdetail.eventdetail',compact('data'));
        
    }

   
}
