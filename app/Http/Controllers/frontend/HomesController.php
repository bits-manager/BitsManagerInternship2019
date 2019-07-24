<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Support\Facades\DB;
use App\MyLibs\Repositories\CityRepository;


class HomesController extends Controller
{

      public function __invoke(Request $request)
    {

    	$event = DB::table('event_types')->get();
    	$eventarr=array(["id"=>"all","event_name"=>"All"]);
        foreach ($event as $key => $value) {
            $events[]=(array)($value);
        }
        $event = array_merge($eventarr,$events);

    	$state = DB::table('states')->get();
         $statearr=array(["id"=>"all","state_name"=>"All"]);
    	foreach ($state as $key => $value) {
    		$state1[]=(array)($value);
    	}
        $state = array_merge($statearr,$state1);
       
        $city=array(["id"=>"all","city_name"=>"All"]);
       
        $township= array(["id"=>"all","township_name"=>"All"]);

        
    return view('frontend.homes.index',compact('event','state','city','township'));
    }
}