<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
  public function index(Request $request)
    {
      return view('frontend.properties.properties');
        
    }
}
