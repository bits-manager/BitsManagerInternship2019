<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mylibs\Repositories\TownshipRepository;
use App\Mylibs\Repositories\StateRepository;
use App\Mylibs\Repositories\CityRepository;
use Grimthorr\LaravelToast\Toast;
use Illuminate\Support\Facades\DB;


class HomesController extends Controller
{

	   public function __construct(TownshipRepository $townshipRepo,StateRepository $stateRepo,CityRepository $cityRepo)
{
    $this->townshipRepo=$townshipRepo;
    $this->stateRepo=$stateRepo;
     $this->cityRepo=$cityRepo;
    
}
    
      public function __invoke(Request $request)
    {
        return view('frontend.homes.index');
    }
    public function create()
    {   $statedata = [];
        $citydata=[];
     
        $statedata=$this->stateRepo->getAll();
         $citydata=$this->cityRepo->getAll();
        return view('frontend.homes.index',compact('statedata','citydata'));
        
        

        
    }

}
