<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendhomeController extends Controller
{

      public function __invoke(Request $request)
    {
        return view('frontend.frontendhome.index');
    }
    
}
