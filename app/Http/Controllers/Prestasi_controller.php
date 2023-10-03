<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Prestasi_controller extends Controller
{
    public function index(){
        $prestasi = Prestasi::all();
        return view('backend.prestasi.index', compact('prestasi'));
    }

    public function insert_form(){
        return view('backend.prestasi.insert');
    }

    public function add_process(Request $request){
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'cabang' => 'required',
            'juara' => 'required',
            'tingkat' => 'required',
        ]);



        // jika data error akan mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'cabang' => $request->cabang,
            'juara' => $request->juara,
            'tinngkat' => $request->tinngkat,

        ];



        if($request->hasFile('sertifikat')){
            $sertifikat = $request->file('sertifikat');

            $path = Storage::putFileAs('public/images',$sertifikat,$sertifikat->getClientOriginalName());
            $data['sertifikat'] = $path;
        }

        // jika tidak eror akan menambahkan data ke database
        $prestasi = Prestasi::create($data);

        // jika berhasil ditambahkan akan dikembalikan ke index
        if($prestasi){
            return Redirect()->to('/prestasi/view')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }
}
