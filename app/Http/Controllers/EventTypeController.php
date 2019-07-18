<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\MyLibs\Repositories\EventTypeRepository;
use Illuminate\Support\Facades\DB;
use App\MyLibs\Models;



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
         'event_name' => 'required|max:255',
          'image' => 'required|dimensions:max_width=600,max_height=350',]);

          $image = $request->file('image');
          $new_name=rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('image'),$new_name);
          $form_data=array(
            'event_name'=>$request->event_name,
            'image'=>$new_name
            );
         
         $this->eventRepo->create($form_data);
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
	       }

      public function update(Request $request)
           { 
              $event_id=$request->id;
              $image_name=$request->hidden_image;
              $image=$request->file('image');
              if($image==''){
                  $form_data=array(
                    'event_name'=>$request->event_name,
                    'image'=>$image_name,
                  );
              }
              if($image!=''){
                $imagenew=rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('image'),$imagenew);
                $image_path = public_path().'/image/'.$image_name;
                unlink($image_path);
                $this->eventRepo->delete($image_name);
                $form_data=array(
                'event_name'=>$request->event_name,
                'image'=>$imagenew,
                );
            }
              $form_data=array_except($form_data,['$event_id']);
              $this->eventRepo->update($form_data,$event_id);
        
           return back()->with('info','Event name  is successfully updated');
           return redirect()->back()->withInput();
           }

      public function destroy($event_id)
        {
        $data=$this->eventRepo->getById($event_id);
        $image_name=$data->image;
        $image_path = public_path().'/image/'.$image_name;

        unlink($image_path);

        $this->eventRepo->delete($event_id,$image_name);
        return back()->with('info','info is sucessfully delete!');
         return redirect()->back()->withInput();
            
      }

}
	   

