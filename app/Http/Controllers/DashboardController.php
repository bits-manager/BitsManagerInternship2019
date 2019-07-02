<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
/*    		$count = \Counter::showAndCount('http://192.168.74.1:8800/frontend/homes');
*/    		$count = \Counter::showAndCount('http://127.0.0.1:8000');
			$daycount=\Counter::allHits(30);
			
        return view('admin.dashboard.index',compact('count','daycount'));
    }
     public function index(Request $request)
    {
        return view('admin.dashboard.index');
    }
   
   
}
