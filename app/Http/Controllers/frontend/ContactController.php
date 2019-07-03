<?php 

namespace App\Http\Controllers\frontend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\MyLibs\Repositories\ContactRepository;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller

{
   public function index(Request $request)
    {

		$event = DB::table('event_types')->get();
    	$state = DB::table('states')->get();
    	$city = DB::table('cities')->get();
    	$township = DB::table('townships')->get();
      	return view('frontend.contact.contact',compact('contact','event','state','city','township'));
        
    }

}


