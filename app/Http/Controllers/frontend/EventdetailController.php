<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class EventdetailController extends Controller
{
    public function index(Request $request)                                               
    {  
    	$data = DB::table('event_type_halls')->value('description');
       $event = DB::table('event_types')->get();
      return view('frontend.eventdetail.eventdetail',compact('event','data'));
        
    }

   
}
