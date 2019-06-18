<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Mylibs\Repositories\TownshipRepository;
use App\Mylibs\Repositories\StateRepository;
use App\Mylibs\Repositories\CityRepository;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Support\Facades\DB;




class TownshipController extends Controller
{
    public function __construct(TownshipRepository $townshipRepo,StateRepository $stateRepo,CityRepository $cityRepo)
{
    $this->townshipRepo=$townshipRepo;
    $this->stateRepo=$stateRepo;
     $this->cityRepo=$cityRepo;
    
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data = DB::table('townships')
                ->join('states','states.id','=','townships.state_id')
                ->join('cities','cities.id','=','townships.city_id')
                ->select('townships.id','states.state_name','cities.city_name','townships.township_name')
                
                ->get();

        
        return view('admin.township.index',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $statedata = [];
        $citydata=[];
     
        $statedata=$this->stateRepo->getAll();
         $citydata=$this->cityRepo->getAll();
        return view('admin.township.create',compact('statedata','citydata'));
        
        

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {    
        $validatedData=$request->validate([
    'city_name' => 'required|unique:cities|max:255',
     'township_name' => 'required|unique:townships|max:255',
        
]);
        
        $data = $request->all();
        $this->townshipRepo->create($data);
        
        return back()->with('info','Township is successfully save!');
        return redirect()->back()->withInput();
        

    }
    public function edit(Request $request)
    {
        $statedata = [];
        $citydata = [];
       $statedata =$this->stateRepo->getAll();
       $citydata =$this->cityRepo->getAll();
       $edit_states=$this->cityRepo->getById($city_id);
        $edit_cities=$this->townshipRepo->getById($id);
        return view('admin.township.edit',compact('edit_townships','statedata','citydata'));
        
    }

    public function show($townships_id,Request $request)
    {
        
      
           $data=$request->all();
          
           $data=array_except($data,['$townships_id']);
            $this->townshipRepo->update($data,$townships_id);
           
        
        return back()->with('info','Township is successfully update!');
        return redirect()->back()->withInput();
    }

    public function delete($townships_id)
    {
        $id=$request->id;
        $this->townshipRepo->delete($townships_id);
 
        return back()->with('info','Store is successfully delete!');
        return redirect()->back()->withInput();
    }


}
