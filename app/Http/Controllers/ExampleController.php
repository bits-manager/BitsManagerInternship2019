<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyLibs\Models\EventType;


class ExampleController extends Controller
{
    public function index(Request $requ)
    {
    	$eventType_id = $requ->eventType_id;
    	$state_id = $requ->state_id;
    	$city_id = $requ->city_id;
    	$township_id = $requ->township_id;
    	/*$halls = EventType::find($eventType_id)->halls()->where('state_id','=',$state_id)->where('state_id','=',$city_id)->where('state_id','=',$township_id)->get();
    	dd($halls);*/

    }
}
