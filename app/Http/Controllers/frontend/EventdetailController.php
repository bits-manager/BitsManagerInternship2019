<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class EventdetailController extends Controller
{
    public function index(Request $request)                                               
    { 
       $eventType_id= $request->eventType_id;
       $data = DB::table('event_type_halls')
               ->where('eventType_id', '=',$eventType_id)
               ->get();
     

      return view('frontend.eventdetail.eventdetail',compact('data'));
        
    }

   
}
