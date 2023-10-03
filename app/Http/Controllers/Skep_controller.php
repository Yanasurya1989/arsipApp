<?php

namespace App\Http\Controllers;

use App\Models\M_skep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Skep_controller extends Controller
{
    public function index(){
        $skep = M_skep::all();
        return view('backend.skep.index', compact('skep'));
    }

    public function add_process(Request $request){
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'tanggal' => 'required',
        ]);



        // jika data error akan mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'title' => $request->title,
            'tanggal' => $request->tanggal,

        ];



        if($request->hasFile('file')){
            $file = $request->file('file');

            $path = Storage::putFileAs('public/images',$file,$file->getClientOriginalName());
            $data['file'] = $path;
        }

        // jika tidak eror akan menambahkan data ke database
        $skep = M_skep::create($data);

        // jika berhasil ditambahkan akan dikembalikan ke index
        if($skep){
            return Redirect()->to('/skep/view')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }
}
