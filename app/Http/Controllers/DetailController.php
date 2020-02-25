<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailController extends Controller
{
    public function detail()
    {
    	$profile = DB::table('profile')->get();	
    	return view('detail',['profile' => $profile]);
 
    }
}
