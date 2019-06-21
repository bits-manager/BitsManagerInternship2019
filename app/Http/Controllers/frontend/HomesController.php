<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomesController extends Controller
{
    
      public function __invoke(Request $request)
    {
        return view('frontend.homes.index');
    }
    
}
