<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function admin()
    {
    	$profile = DB::table('profile')->get();	
    	return view('admin',['profile' => $profile]);
 
    }
}
