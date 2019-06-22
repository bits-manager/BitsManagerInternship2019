<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyLibs\Repositories\ContactRepository;

//use Grimthorr\LaravelToast\Toast;


class ContactController extends Controller
{

  public function __construct(ContactRepository $contactRepo){
    $this->contactRepo=$contactRepo;
  }
   


 public function index()
        {
           $contacts=$this->contactRepo->getAll();
           return view('admin.contact.index', compact('contacts'));
        }
        

   public function create(){

         return view('admin.contant.create');
    }
    


    public function store(Request $request)
    {
    	   $validatedData = $request->validate([
            'name' => 'required:contacts||max:255',

         ]);

      

        $data=$request->all();
        $this->stateRepo->create($data);
    
    }
  
    
        public function edit($id)
        {
          
        }

       

        public function show($id)
        {
           //
        }


        public function destroy($state_id)
        {
          
        }

}


  