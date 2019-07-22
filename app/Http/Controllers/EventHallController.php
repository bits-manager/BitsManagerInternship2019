<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\MyLibs\Models;
use App\MyLibs\Repositories\HallRepository;
use App\MyLibs\Repositories\EventTypeRepository;
use App\MyLibs\Repositories\EventHallRepository;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Support\Facades\DB;


class EventHallController extends Controller
{
    public function __construct(EventHallRepository $eventhallRepo ,HallRepository $hallRepo ,EventTypeRepository $eventTypeRepo)
	{
		    $this->eventhallRepo=$eventhallRepo;
        $this->hallRepo=$hallRepo;
        $this->eventTypeRepo=$eventTypeRepo;

	}
    public function create()
    {
        $halldata = [];
        $halldata =$this->hallRepo->getAll();
        $eventdata = [];
        $eventdata =$this->eventTypeRepo->getAll();
    	return view('admin.eventhall.create', compact('halldata','eventdata'));

    }
    
    public function store(Request $request)
    {
    	
        
    	$validatedData=$request->validate([
      'description' => 'required',
      'image' => 'required', 
      ]);
    	/*$data = $request->all();
      $description= explode('>',$data['description']);
      $description= explode('<',$description[1]);
      $description=$description[0];
      $newdata=array(
                    'hall_id' =>$data->hall_id,
                    'eventType_id' =>$data->eventType_id
                    'description'=>$description
                  );

        dd($newdata);*/
       
       
          $image = $request->file('image');
          $new_name=rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('image'),$new_name);
          $form_data=array(
            'hall_name'=>$request->hall_name,
            'hall_id'=>$request->hall_id,
            'eventType_id'=>$request->eventType_id,
             'description' => $request->description,
            'event_name'=>$request->event_name,
            'image'=>$new_name
            );
         
       $this->eventhallRepo->create($form_data);

       return back()->with('info','Hall_Event is successfully save!');
       return redirect()->back()->withInput();
    
    }


    public function index(Request $request)
    {
    	
        $data = DB::table('event_type_halls')
       ->join('halls', 'halls.id', '=', 'event_type_halls.hall_id')
       ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
       ->select('event_type_halls.id','halls.hall_name','event_type_halls.image' ,'event_types.event_name','event_type_halls.description')
       ->get();
        
        return view('admin.eventhall.index',compact('data'));
    }
    public function edit($eventhall_id)
    {
       
       $halldata = [];
        $halldata =$this->hallRepo->getAll();
        $eventdata = [];
        $eventdata =$this->eventTypeRepo->getAll();
       $edit_hallevents=$this->eventhallRepo->getById($eventhall_id);

         return view('admin.eventhall.edit', compact('edit_hallevents','halldata','eventdata'));
         
    }
 public function update(Request $request)
           { 
             $eventhall_id=$request->id;
              $image_name=$request->hidden_image;
              $image=$request->file('image');
              if($image==''){
                  $form_data=array(
                   'hall_name'=>$request->hall_name,
                    'event_name'=>$request->event_name,
                    'image'=>$image_name,
                  );
              }
              if($image!=''){
                $imagenew=rand().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('image'),$imagenew);
                $image_path = public_path().'/image/'.$image_name;
                unlink($image_path);
                $this->eventhallRepo->delete($image_name);
                $form_data=array(
                 'hall_name'=>$request->hall_name,
                 'event_name'=>$request->event_name,
                 'image'=>$imagenew,
                );
            }
              $form_data=array_except($form_data,['$eventhall_id']);
            $this->eventhallRepo->update($form_data,$eventhall_id);
           
        
        return back()->with('info','Hall_Event is successfully update!');
        return redirect()->back()->withInput();
           }



    public function destroy($eventhall_id)
    {
       $data=$this->eventhallRepo->getById($eventhall_id);
        $image_name=$data->image;
        $image_path = public_path().'/image/'.$image_name;

        unlink($image_path);

        $this->eventhallRepo->delete($eventhall_id,$image_name);
        
        return back()->with('info','Hall_Event is successfully delete!');
             return redirect()->back()->withInput();
 }
}
