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
   


 public function index(Request $request)
        {
           
             $contact=$this->contactRepo->getAll();      
        
             return view('admin.contact.index', compact('contact'));
         }
   public function create()
   {

         return view('admin.contact.create');
    }
    


    public function store(Request $request)
    {    
         $validatedData = $request->validate([
         'name' => 'required|max:255',
         'email' => 'required|max:255',
         'subject' => 'required|max:255',
         'message' => 'required|max:255',
         
     ]);
    
      $data=$request->all();
    $this->contactRepo->create($data);
    
     return back()->with('info','Contact is successfully save!');

     return redirect()->back()->withInput();
    }
  
    
        public function edit($id)
        {
           
        }

       

        public function show($id)
        {    
           $data = $request->all();
           $this->contactRepo->update($data,$id);
           return redirect()->back()->with('info','Contact  is successfully updated');
           return redirect()->back()->withInput();
           //
        }


        public function destroy()
        {
         
        }

}


  