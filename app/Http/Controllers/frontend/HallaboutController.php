<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HallaboutController extends Controller
{
    public function index(Request $request)
    {
       $hall=DB::table('halls')
       	->join('states','states.id','=','halls.state_id')
           		->join('cities','cities.id','=','halls.city_id')
           		->join('townships','townships.id','=','halls.township_id')
           		->select('halls.id','halls.image','halls.hall_name','halls.phone_no','halls.open_time','halls.close_time','states.state_name','cities.city_name','townships.township_name','halls.address')
                ->get();
      return view('frontend.hallabout.hallabout',compact('hall'));
        
    }
    
}

