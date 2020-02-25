<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DetailController extends Controller
{
    public function detail($id_profil)
    {
    	$profile = DB::table('profile')->where('id_profil',$id_profil)->get();
    	return view('detail',['profile' => $profile]);
 
    }
}
