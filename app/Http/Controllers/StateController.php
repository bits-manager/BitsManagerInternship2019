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
           return view('admin.state.index', compact('states'));
        }
        

   public function create(){

         return view('admin.state.create');
    }
    


    public function store(Request $request){
    	$validatedData = $request->validate([
            'state_name' => 'required|unique:states||max:255',

         ]);

      

      	$data=$request->all();
    	  $this->stateRepo->create($data);
     	  return back()->with('info','State is successfully save!');
        return redirect()->back()->withInput();
    }
  
    
        public function edit($id)
        {
          $edit_states=$this->stateRepo->getById($id);
          return view('admin.state.edit', compact('edit_states'));
        }

       

        public function show($id,Request $request)
        {
           $data=$request->all();
          $this->stateRepo->update($data,$id);
          return back()->with('info','State is successfully update!');
          return redirect()->back()->withInput();
        }


        public function destroy($state_id)
        {
            
          $this->stateRepo->delete($state_id);
          return back()->with('info','State is successfully delete!');
          return redirect()->back()->withInput();
        }

        

}


  