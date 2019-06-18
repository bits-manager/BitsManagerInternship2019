<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyLibs\Repositories\EventTypeRepository;


class EventTypeController extends Controller
{
      public function __construct(EventTypeRepository $eventRepo)
    {
        	$this->eventRepo=$eventRepo;
    }

    	public function create()
        {
          return view ('admin.event.create') ;
        }
    	public function store(Request $request)
       {
         $validatedData = $request->validate([
            'event_name' => 'required|unique:event_types||max:255',

         ]);
        	$data = $request->all();
    	   
    	    $this->eventRepo->create($data);
    	   	
    	    return back()->with('info','Event is sucessfully save!');
           return redirect()->back()->withInput();
       }
      public function index()
    	   {
    	    	$event=$this->eventRepo->getAll();
    	    	return view('admin.event.index',compact('event'));
    	   }
      public function edit($id)
           {
               $edit_event=$this->eventRepo->getById($id);
               return view('admin.event.edit',compact('edit_event'));
               return view ('admin.event.index') ;
	       }
         public function show($id,Request $request)
           {
            $data = $request->all();
           $this->eventRepo->update($data,$id);
           return redirect()->back()->with('info','Event name  is successfully updated');
           return redirect()->back()->withInput();
           }

      public function destroy($event_id)
        {
        
        $this->eventRepo->delete($event_id);
        return back()->with('info','info is sucessfully delete!');
         return redirect()->back()->withInput();
            
      }

}
	   

