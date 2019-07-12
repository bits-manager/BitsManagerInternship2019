<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactForMail;
use App\MyLibs\Repositories\ContactRepository;
use Illuminate\Support\Facades\Mail;


//use Grimthorr\LaravelToast\Toast;


class ContactController extends Controller 
{

  public function __construct(ContactRepository $contactRepo){
    $this->contactRepo=$contactRepo;
  }

   public function create(){

         return view('frontend.contact');
    }
    


    public function store(Request $request)
    {
    
         $validatedData = $request->validate([
         'contact_name' => 'required|max:255',
         'email' => 'required|max:255',
         'subject' => 'required|max:255',
         'message' => 'required|max:255',
       ]);
             $data=$request->all();
           $this->contactRepo->create($data);

          Mail::to($request->user())->send(new ContactForMail($data));
          
  
    return back()->with('info','Thanks for contacting us!.We will respond as soon as possible.');

      return redirect()->back()->withInput();
   }
     

 public function index()
        {
           $contact=$this->contactRepo->getAll();
           return view('admin.contact.index', compact('contact'));
        }
  
    
        public function edit($id)
        {
          
        }

       

        public function show($id)
        {
           //
        }


       
      public function destroy($contact_id)
        {
        
        $this->contactRepo->delete($contact_id);
        return back()->with('info','info is sucessfully delete!');
        return redirect()->back()->withInput();
            
      }
      


} 