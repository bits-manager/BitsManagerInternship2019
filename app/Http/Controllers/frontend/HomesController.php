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

        $popularhalls= DB::table('halls')
        ->join('states','states.id','=','halls.state_id')
        ->whereIn('states.state_name',['Mandalay','Yangon'])
       
        ->limit(8)
        ->get();
        
        /*$events[]=[];
        $state1[]=[];
*/
    $event = DB::table('event_types')->get();
        $eventarr=array(["id"=>"all","event_name"=>"Event Type(All)"]);
        $events = array();

        foreach ($event as $key => $value) {
            $events[]=(array)($value);
        }
        $event = array_merge($eventarr,$events);


        $state = DB::table('states')->get();
         $statearr=array(["id"=>"all","state_name"=>"State(All)"]);
          $state1= array();
        foreach ($state as $key => $value) {
            $state1[]=(array)($value);
        }
        $state = array_merge($statearr,$state1);
        $city=array(["id"=>"all","city_name"=>"City(All)"]);
       
        $township= array(["id"=>"all","township_name"=>"Township(All)"]);

        
    return view('frontend.homes.index',compact('event','state','city','township','popularhalls'));


}
}