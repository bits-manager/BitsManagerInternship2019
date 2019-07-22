<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\MyLibs\Repositories\CityRepository;
use App\MyLibs\Repositories\StateRepository;
use App\MyLibs\Repositories\TownshipRepository;
use App\MyLibs\Repositories\HallRepository;
use Illuminate\Support\Facades\DB;
use App\MyLibs\Models;


class HallController extends Controller
{
    public function __construct(HallRepository $hallRepo,StateRepository $stateRepo,CityRepository $cityRepo,TownshipRepository $townshipRepo){
    		$this->hallRepo=$hallRepo;
    		$this->cityRepo=$cityRepo;
    		$this->stateRepo=$stateRepo;
    		$this->townshipRepo=$townshipRepo;
  }

    public function index()
        {
           $data=DB::table('halls')
           		->join('states','states.id','=','halls.state_id')
           		->join('cities','cities.id','=','halls.city_id')
           		->join('townships','townships.id','=','halls.township_id')
           		->select('halls.id','halls.hall_image','halls.hall_name','halls.phone_no','halls.open_time','halls.close_time','states.state_name','cities.city_name','townships.township_name','halls.address')
           		->get();
           return view('admin.hall.index', compact('data'));
        }

    public function create(){

          $statedata = [];
          $statedata =$this->stateRepo->getAll();
         
          $citydata = [];
          $citydata =$this->cityRepo->getAll();

          $townshipdata = [];
          $townshipdata =$this->townshipRepo->getAll();

          return view('admin.hall.create',compact('statedata','citydata','townshipdata'));
          
    }

    public function store(Request $request)
       {
          $validatedData=$request->validate([
          'hall_name' => 'required|unique:halls|max:255',
          'phone_no' => 'required|unique:halls',
          'open_time' => 'required',
          'close_time' => 'required',
          'address' => 'required',
          'hall_image' => 'required',
        ]);

          $image = $request->file('hall_image');
          $new_name=rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path('image'),$new_name);
          $form_data=array(
            'hall_name'=>$request->hall_name,
            'phone_no'=>$request->phone_no,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'state_id'=>$request->state_id,
            'city_id'=>$request->city_id,
            'township_id'=>$request->township_id,
            'address'=>$request->address,
            'hall_image'=>$new_name
            );
          $state_id= explode(':',$form_data['state_id']);
          $city_id= explode(':',$form_data['city_id']);
          $township_id=explode(':',$form_data['township_id']);

          $form_data['state_id'] = $state_id[1];
          $form_data['city_id'] = $city_id[1];
          $form_data['township_id'] = $township_id[1];

          $this->hallRepo->create($form_data);
          return back()->with('info','Hall is sucessfully save!');
          return redirect()->back()->withInput();
       }


      public function edit($hall_id)
      {
       
       $statedata = [];
       $statedata =$this->stateRepo->getAll();

       $citydata = [];
        $citydata =$this->cityRepo->getAll();

        $townshipdata = [];
        $townshipdata =$this->townshipRepo->getAll();
          

       $edit_halls=$this->hallRepo->getById($hall_id);
       
       return view('admin.hall.edit',compact('edit_halls','statedata','citydata','townshipdata'));
         
      }

  

    public function update(Request $request)
    {
      $hall_id=$request->id;
      $image_name=$request->hidden_image;
      $image=$request->file('hall_image');

      if($image==''){
          $form_data=array(
            'hall_name'=>$request->hall_name,
            'phone_no'=>$request->phone_no,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'state_id'=>$request->state_id,
            'city_id'=>$request->city_id,
            'township_id'=>$request->township_id,
            'address'=>$request->address,
            'hall_image'=>$image_name
          );
      }
      if($image!=''){
          $imagenew=rand().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('image'),$imagenew);
          $image_path = public_path().'/image/'.$image_name;
          unlink($image_path);
          $this->hallRepo->delete($image_name);
          $form_data=array(
            'hall_name'=>$request->hall_name,
            'phone_no'=>$request->phone_no,
            'open_time'=>$request->open_time,
            'close_time'=>$request->close_time,
            'state_id'=>$request->state_id,
            'city_id'=>$request->city_id,
            'township_id'=>$request->township_id,
            'address'=>$request->address,
            'hall_image'=>$imagenew
            );
        }
          $state_id= explode(':',$form_data['state_id']);
          $city_id= explode(':',$form_data['city_id']);
          $township_id=explode(':',$form_data['township_id']);

          $form_data['state_id'] = $state_id[1];
          $form_data['city_id'] = $city_id[1];
          $form_data['township_id'] = $township_id[1];

          $form_data=array_except($form_data,['$hall_id']);
          $this->hallRepo->update($form_data,$hall_id);

        return back()->with('info','Hall is successfully update!');
        return redirect()->back()->withInput();
    } 

    public function destroy($hall_id)
    {

      $data=$this->hallRepo->getById($hall_id);
      $image_name=$data->hall_image;
      $image_path = public_path().'/image/'.$image_name;
      unlink($image_path);
      $this->hallRepo->delete($hall_id,$image_name);
      return back()->with('info','Hall is successfully delete!');
      return redirect()->back()->withInput();
    }
}
