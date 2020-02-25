<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuriController extends Controller
{
    public function juri()
    {
    	$profile = DB::table('profile')->get();	
    	return view('juri',['profile' => $profile]);
 
    }
}
