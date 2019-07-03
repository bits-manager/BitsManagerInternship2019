<?php

namespace App\Http\Controllers\Api;

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

    
}
