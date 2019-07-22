<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
        
	     ]);
         

    	$data = $request->all();
      /*$description= explode('>',$data['description']);
      $description= explode('<',$description[1]);
      $description=$description[0];
      $newdata=array(
                    'hall_id' =>$data->hall_id,
                    'eventType_id' =>$data->eventType_id
                    'description'=>$description
                  );

        dd($newdata);*/
        $this->eventhallRepo->create($data);
       
        
       return back()->with('info','Hall_Event is successfully save!');
       return redirect()->back()->withInput();
    
    }
    public function index(Request $request)
    {
    	
        $data = DB::table('event_type_halls')
       ->join('halls', 'halls.id', '=', 'event_type_halls.hall_id')
       ->join('event_types', 'event_types.id', '=', 'event_type_halls.eventType_id')
       ->select('event_type_halls.id','halls.hall_name', 'event_types.event_name','event_type_halls.description')
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
    public function show($eventhall_id,Request $request)
    {
    	
      
           $data=$request->all();
          
           $data=array_except($data,['$eventhall_id']);
            $this->eventhallRepo->update($data,$eventhall_id);
           
        
        return back()->with('info','Hall_Event is successfully update!');
        return redirect()->back()->withInput();
    }
    public function destroy($eventhall_id)
    {
        
        $this->eventhallRepo->delete($eventhall_id);

      return back()->with('info','Hall_Event is successfully delete!');
             return redirect()->back()->withInput();
 }
}
