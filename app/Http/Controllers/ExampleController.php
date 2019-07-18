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
        $data = $requ->all();
        $eventType_id=explode(':', $data['event_id']);
        $state_id=explode(':', $data['state_id']);
        $city_id=explode(':', $data['city_id']);
        $township_id=explode(':', $data['township_id']);
    	
        

        $halls = DB::table('event_type_halls')
                ->join('halls', 'event_type_halls.hall_id', '=', 'halls.id')
                ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
                ->where('event_type_halls.eventType_id', '=',$eventType_id[1])
                ->where('halls.state_id', '=',$state_id[1])
                ->where('halls.city_id', '=',$city_id[1])
                ->where('halls.township_id', '=',$township_id[1])    
                ->select('event_type_halls.eventType_id','event_type_halls.hall_id','halls.hall_name','event_types.event_name','event_types.image')
                ->get();
          dd($halls);
            
        /*return view('frontend.homes.index', compact('halls'));*/

        
    }
}
