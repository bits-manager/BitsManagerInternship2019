<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\MyLibs\Repositories\CityRepository;
use App\MyLibs\Repositories\StateRepository;
use App\MyLibs\Repositories\TownshipRepository;
use App\MyLibs\Repositories\HallRepository;
use Illuminate\Support\Facades\DB;


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
           		->select('halls.id','halls.hall_name','halls.phone_no','halls.open_time','halls.close_time','states.state_name','cities.city_name','townships.township_name','halls.address')
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
          //return view('admin.hall.create');
    }

    public function store(Request $request)
       {
         /*$validatedData = $request->validate([
            'hall_name' => 'required|unique:halls||max:255',

         ]);*/
          $data = $request->all();
          //dd($data);
         
          $this->hallRepo->create($data);
          
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

        return view('admin.hall.edit', compact('edit_halls','statedata','citydata','townshipdata'));
         
    }

    public function destroy($hall_id)
    {
        
        $this->hallRepo->delete($hall_id);

      return back()->with('info','Hall is successfully delete!');
             return redirect()->back()->withInput();
 }











}
