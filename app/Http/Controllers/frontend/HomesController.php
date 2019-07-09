<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomesController extends Controller
{
    
      public function __invoke(Request $request)
    {
    	$event = DB::table('event_types')->get();
    	$state = DB::table('states')->get();
    	$city = DB::table('cities')->get();
    	$township = DB::table('townships')->get();

    	
       
        

        return view('frontend.homes.index',compact('event','state','city','township'));
    }
    

}
