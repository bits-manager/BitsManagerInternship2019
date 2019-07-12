<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HallaboutController extends Controller
{
    public function index(Request $request)
    {

      return view('frontend.hallabout.hallabout');
        
    }
    
}
