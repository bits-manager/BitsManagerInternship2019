<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\MyLibs\Repositories\AddressRepository;


class AddressController extends Controller
{
      public function __construct(AddressRepository $addressRepo)
    {
        	$this->addressRepo=$addressRepo;
    }

    	public function create()
        {
          return view ('admin.address.create') ;
        }
    	public function store(Request $request)
       { 
         $validatedData = $request->validate([
              'address' => 'required|max:255',
              'phone' => 'required|numeric|unique:addresses|min:11',
              'email' => 'required|email|unique:addresses|max:20',
              'status'=> 'required|boolean',
           
        ]);

           if($request->get('status') == null){
            $status = 0;
        }
        else{
            $status = 1;
        }
           
        

        	$data = $request->all();
    	   
    	    $this->addressRepo->create($data);
    	   	
    	    return back()->with('info','Address is sucessfully save!');
           return redirect()->back()->withInput();
       }
      public function index()
    	   {
    	    	$address=$this->addressRepo->getAll();
    	    	return view('admin.address.index',compact('address'));
    	   }
      public function edit(Request $request,$id)
         {      
 
               $edit_address=$this->addressRepo->getById($id);
               return view('admin.address.edit',compact('edit_address'));
	       }
         

         public function show($id,Request $request)
           { 
        
            $request['status'] = isset($request['status']) ? "1":"0";

            $data = $request->all();
           $this->addressRepo->update($data,$id);
           return redirect()->back()->with('info','Address  is successfully updated');
           return redirect()->back()->withInput();
           }

      public function destroy($address_id)
        {
        
        $this->addressRepo->delete($address_id);
        return back()->with('info','address is sucessfully delete!');
         return redirect()->back()->withInput();
            
      }

}
	   

