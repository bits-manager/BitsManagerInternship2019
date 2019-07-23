<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
 		//$count = \Counter::showAndCount('frontend.homes');
    	
        return view('admin.dashboard.index');
    }
     public function index(Request $request)
    {

        return view('admin.dashboard.index');
    }
   
   
}
