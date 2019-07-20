<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HallaboutController extends Controller
{
    public function index(Request $request)
    {
      $hall = DB::table('halls')->get();
      return view('frontend.hallabout.hallabout',compact('hall'));
        
    }
    
}
