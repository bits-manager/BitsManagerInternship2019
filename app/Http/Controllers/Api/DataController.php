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
              
          if(count($cities)>0){
            return $this->respondSuccess('success',$cities);

          }   
      } catch (\Exception $e) {
        \Log::error($e->getMessage());
      }
      return $this->respondError('error');
    }

    public function getAll(Request $request)
    {


    	try{

        if($request->state_id=='all'){
         $cities=array(["id"=>"all","city_name"=>"All"]);
         $townships= array(["id"=>"all","township_name"=>"All"]); 
         
        }else{



    		$cities = $this->cityRepo->getcities($request->state_id);
       
        $city=$cities[0]->id;
        $townships=$this->townshipRepo->gettownships($request->state_id,$city);  
      }    
		      if(count($cities)>0 || count($townships)>0){
            return $this->respondSuccess('success',['city'=>$cities,'township'=>$townships]);

        } 	
    	} catch (\Exception $e) {
    		\Log::error($e->getMessage());
    	}
      return $this->respondError('error');
    }

public function getTownship(Request $request)
    {
      
        try {
            $townships =$this->townshipRepo->gettownships($request->state_id,$request->city_id);

              if(count($townships)>0)
                return $this->respondSuccess('success',$townships);    
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
        }
      return $this->respondError('error');
    }
}
    

