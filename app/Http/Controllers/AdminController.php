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
    public function setuju($id_profil)
{
	// update data pegawai
	DB::table('profile')->where('id_profil',$id_profil)->update([
        'status' => 1
    ]);
    return redirect('/admin');
}
public function hapus($id_profil)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('profile')->where('id_profil',$id_profil)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/admin');
	}
}
