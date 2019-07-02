<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\MyLibs\Repositories\CityRepository;
use App\MyLibs\Repositories\StateRepository;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
	public function __construct(CityRepository $cityRepo , StateRepository $stateRepo)
	{
		$this->cityRepo=$cityRepo;
        $this->stateRepo=$stateRepo;
       // $this->middleware('acityRepouth');

	}
    public function create()
    {
        $statedata = [];
        $statedata =$this->stateRepo->getAll();
    	return view('admin.city.create',compact('statedata'));
        
    }
    public function store(Request $request)
    {

    	$data = $request->all();
    
      $cities=explode(',', $data['city_name']);

      foreach ($cities as $key => $value)
      {
        $city['state_id'] =$data['state_id'];
        $state = DB::table('states')
                ->where('states.id','=',$city['state_id'])
                ->value('state_name');
                
        $ans = DB::table('cities')->where('cities.state_id','=',$city['state_id'])    ->where('cities.city_name','=',$value)->first() ;
        if(!is_null($ans))  
        {
          return back()->with('error','State Name "'. $state .'"' .' and City Name "'.$value .'"'.' has been inserted.');
        }                      
      }
      foreach ($cities as $key => $value) 
      {
        $city['state_id'] =$data['state_id'];
        $city['city_name'] =$value;
        $this->cityRepo->create($city);
      }
        return back()->with('info','City is successfully save!');
        return redirect()->back()->withInput();
    }

    
    public function index(Request $request)
    {
    	
        $data = DB::table('cities')
       ->join('states', 'states.id', '=', 'cities.state_id')
       ->select('cities.id','states.state_name', 'cities.city_name','cities.created_at','cities.updated_at')
       ->get();
        
        return view('admin.city.index',compact('data'));
    }
    
    public function edit($city_id)
    {
       
       $statedata = [];
       $statedata =$this->stateRepo->getAll();
       $edit_states=$this->cityRepo->getById($city_id);

         return view('admin.city.edit', compact('edit_states','statedata'));
         
    }
    public function show($city_id,Request $request)
    {
    	
      
           $data=$request->all();
          
           $data=array_except($data,['$city_id']);
            $this->cityRepo->update($data,$city_id);
           
        
        return back()->with('info','City is successfully update!');
        return redirect()->back()->withInput();
    }
    public function destroy($city_id)
    {
        
        $this->cityRepo->delete($city_id);

            return back()->with('info','City is successfully delete!');
            return redirect()->back()->withInput();
 }
}