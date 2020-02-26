<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Nilai;
 
class Fullcontroller extends Controller
{
    
    public function full(){
   	 $nilai = Nilai::all();
    	 return view('full',['nilai' => $nilai]);
   }
}
