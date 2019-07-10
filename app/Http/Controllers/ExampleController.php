<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        

        $halls = DB::table('event_type_halls')
                ->join('halls', 'event_type_halls.hall_id', '=', 'halls.id')
                ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
                ->where('event_type_halls.eventType_id', '=',$eventType_id)
                ->where('halls.state_id', '=',$state_id)
                ->where('halls.city_id', '=',$city_id)
                ->where('halls.township_id', '=',$township_id)    
                ->select('halls.id','halls.hall_name','event_types.image')
                ->get();
                
        dd($halls);

        
    }
}
