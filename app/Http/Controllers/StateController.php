<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyLibs\Repositories\StateRepository;

//use Grimthorr\LaravelToast\Toast;


class StateController extends Controller
{

  public function __construct(StateRepository $stateRepo){
    $this->stateRepo=$stateRepo;
  }
   

 public function index()
        {
           $states=$this->stateRepo->getAll();
          return view('admin.state.create');
        }
        

   public function create(){
         return view('admin.state.create');
    }
    


    public function store(Request $request){
      	$data=$request->all();
    	$this->stateRepo->create($data);
    	dd($data);
    
     	return back()->with('info','State is successfully save!');

     	return redirect()->back()->withInput();
    }
  


      

        /*public function edit(Request $request)
        {
        $id=$request->id;
         $edit_states=$this->stateRepo->getById($id);

         return view('state.edit', compact('edit_states'));
        }

        public function update(Request $request)
        {
           $id=$request->id;
           $data=$request->all();
           $data=array_except($data,['id']);
            $this->stateRepo->update($data,$id);
           
        
        return back()->with('info','State is successfully update!');ss
        return redirect()->back()->withInput();
        }


        public function delete(Request $request)
        {
            $id=$request->id;
            
             $this->stateRepo->delete($id);
            return back()->with('info','State is successfully delete!');
             return redirect()->back()->withInput();
        }*/



    }