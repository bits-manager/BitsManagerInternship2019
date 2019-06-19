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
    	$validatedData=$request->validate([
    'city_name' => 'required|unique:cities|max:255',  
      ]);
    	$data = $request->all();
      $this->cityRepo->create($data);
  
       return back()->with('info','City is successfully save!');
       return redirect()->back()->withInput();
    
    //return back()->with('info','Store is successfully save:');
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
