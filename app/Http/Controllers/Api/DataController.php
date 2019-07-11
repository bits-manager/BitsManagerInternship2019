<?php

namespace App\Http\Controllers\Api;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mylibs\Repositories\CityRepository;
use App\Mylibs\Repositories\TownshipRepository;

class DataController extends ApiController
{

	public function __construct(CityRepository $cityRepo,TownshipRepository $townshipRepo)
	{

     $this->cityRepo=$cityRepo;
     $this->townshipRepo=$townshipRepo;

	}
    public function getCity(Request $request)
    {
    	try {
    		$cities = $this->cityRepo->getcities($request->state_id);		      
		      if(count($cities)>0)
		      	return $this->respondSuccess('success',$cities);	
    	} catch (\Exception $e) {
    		\Log::error($e->getMessage());
    	}
      return $this->respondError('error');
    }


    public function getTownship(Request $request)
    {
        try {
            $townships = $this->townshipRepo->gettownships($request->city_id);             
              if(count($townships)>0)
                return $this->respondSuccess('success',$townships);    
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
      return $this->respondError('error');
    }

    public function getEventHall(Request $request)
    {
    
      $eventType_id = $request->eventType_id;
      $state_id = $request->state_id;
      $city_id = $request->city_id;
      $township_id = $request->township_id;
      $halls = DB::table('event_type_halls')
                ->join('halls', 'event_type_halls.hall_id', '=', 'halls.id')
                ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
                ->where('event_type_halls.eventType_id', '=',$eventType_id)
                ->where('halls.state_id', '=',$state_id)
                ->where('halls.city_id', '=',$city_id)
                ->where('halls.township_id', '=',$township_id)    
                ->select('event_type_halls.eventType_id','event_type_halls.hall_id','halls.hall_name','event_types.image')
                ->get();

      dd($halls);    
    }

}
