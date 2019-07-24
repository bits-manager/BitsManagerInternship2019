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
    	$state = DB::table('states')->get();
    	$city = DB::table('cities')->get();
    	$township = DB::table('townships')->get();
        $popularhalls= DB::table('halls')
        ->join('states','states.id','=','halls.state_id')
        ->whereIn('states.state_name',['Mandalay','Yangon'])
       
        ->limit(4)
        ->get();
        return view('frontend.homes.index',compact('event','state','city','township','popularhalls'));


    }
    
}
