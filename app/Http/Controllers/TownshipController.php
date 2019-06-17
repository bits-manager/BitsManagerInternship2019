<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mylibs\Repositories\TownshipRepository;
use App\Mylibs\Repositories\StateRepository;
use DB;



class TownshipController extends Controller
{
    public function __construct(TownshipRepository $townshipRepo,StateRepository $stateRepo)
{
    $this->townshipRepo=$townshipRepo;
    $this->stateRepo=$stateRepo;
    
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
                ->select('townships.*','states.state_name','cities.city_name','townships.township_name')
                
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
        $data = [];
        $statedata=$this->stateRepo->getAll();
        return view('admin.township.create',compact('statedata'));
        return view('admin.township.create',compact('data'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        
        $data = $request->all();
        $this->townshipRepo->create($data);
        
        return back()->with('info','Township is successfully save!');
        return redirect()->back()->withInput();
        

    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $edit_townships=$this->townshipRepo->getById($id);
        return view('admin.township.edit',compact('edit_townships'));
        
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $data = $request->all();
         $data=array_except($data,['id']);
        $this->townshipRepo->update($data,$id);
         return back()->with('info','Township is successfully update!');
        return redirect()->back()->withInput();
    }

    public function delete(Request $request)
    {
        $id=$request->id;
        $this->townshipRepo->delete($id);
 
        return back()->with('info','Store is successfully delete!');
        return redirect()->back()->withInput();
    }


}
