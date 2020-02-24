<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gambar;
class UploadController extends Controller
{
    public function upload(Request $request)
{
    $this->validate($request, [
        'nama_kelompok'=> 'required',
        'email'=> 'required|email',
        'nama_sekolah'=> 'required',
        'nama_sutradara'=> 'required',
        'nama_penulis'=>'required',
        'link'=>'required',
        'poster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'film'=>'required',//'required|file|video|mimes:mp4,avi,mov|max:300000',
        'sinopsis' => 'required|min:10'
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('poster');
    $video=$request->file('film');
    $nama_file = time()."_".$file->getClientOriginalName();
    $nama_file2 = time()."_".$video->getClientOriginalName();
              // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';
    $tujuan_upload2 = 'data_video';
    $file->move($tujuan_upload,$nama_file);
    $video->move($tujuan_upload2,$nama_file2);
    Gambar::create([
        'nama_kelompok' => $request->nama_kelompok,
		'email' => $request->email,
		'nama_sekolah' => $request->nama_sekolah,
        'nama_sutradara' => $request->nama_sutradara,
        'nama_penulis' => $request->nama_penulis,
        'link' => $request->link,
        'poster' => $nama_file,
        'film'=>$nama_file2,
        'sinopsis' => $request->sinopsis
    ]);
/*   
    $this->validate($request, [
        'file' => 'required',
        'sinopsis' => 'required',
    ]);

    // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');

              // nama file
    echo 'File Name: '.$file->getClientOriginalName();
    echo '<br>';

              // ekstensi file
    echo 'File Extension: '.$file->getClientOriginalExtension();
    echo '<br>';

              // real path
    echo 'File Real Path: '.$file->getRealPath();
    echo '<br>';

              // ukuran file
    echo 'File Size: '.$file->getSize();
    echo '<br>';

              // tipe mime
    echo 'File Mime Type: '.$file->getMimeType();

              // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'data_file';

            // upload file
    $file->move($tujuan_upload,$file->getClientOriginalName());

	// insert data ke table pegawai
	DB::table('profile')->insert([
		'nama_kelompok' => $request->nama_kelompok,
		'email' => $request->email,
		'nama_sekolah' => $request->sekolah,
        'nama_sutradara' => $request->sutradara,
        'nama_penulis' => $request->skenario,
        'link' => $request->trailer,
        //'poster' => $request->file,
        //'film' => $request->film,
        'sinopsis' => $request->sinopsis
	]);*/
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}
}
