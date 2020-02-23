<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit()
    {
        // mengambil data pegawai berdasarkan id yang dipilih
    //	$users = DB::table('users')->where('email',$email)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit');
     
    }
}
