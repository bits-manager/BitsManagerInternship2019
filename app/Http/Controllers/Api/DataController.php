<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mylibs\Repositories\CityRepository;

class DataController extends ApiController
{

	public function __construct(CityRepository $cityRepo)
	{

     $this->cityRepo=$cityRepo;
    
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
}
