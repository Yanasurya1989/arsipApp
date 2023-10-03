<?php

namespace App\Http\Controllers;

use App\Models\M_suratkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Surat_keluar extends Controller
{
    public function index(){
        $surat_keluar = M_suratkeluar::all();
        return view('backend.surat_keluar.index', compact('surat_keluar'));

    }

    public function form_insert(){
        return view('backend.surat_keluar.insert');
    }

    public function add_process(Request $request){
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'tujuan' => 'required',
            'tanggal' => 'required',
            'nomer' => 'required',
            'kode_surat' => 'required',
            'perihal' => 'required',
            'nomer_petunjuk' => 'required',
            'keterangan' => 'required',
            'file' => 'required',
        ]);



        // jika data error akan mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'tujuan' => $request->tujuan,
            'tanggal' => $request->tanggal,
            'nomer' => $request->nomer,
            'kode_surat' => $request->kode_surat,
            'perihal' => $request->perihal,
            'nomer_petunjuk' => $request->nomer_petunjuk,
            'keterangan' => $request->keterangan,
            'file' => $request->file,

        ];



        if($request->hasFile('file')){
            $file = $request->file('file');

            $path = Storage::putFileAs('public/images',$file,$file->getClientOriginalName());
            $data['file'] = $path;
        }

        // jika tidak eror akan menambahkan data ke database
        $surat_keluar = M_suratkeluar::create($data);

        // jika berhasil ditambahkan akan dikembalikan ke index
        if($surat_keluar){
            return Redirect()->to('/surat_keluar/view')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }

    public function edit(M_suratkeluar $surat_keluar){
        return view('backend.surat_keluar.form_edit', compact('surat_keluar'));
    }

    public function delete(M_suratkeluar $surat_keluar){

        if(Storage::get($surat_keluar->file)){
            Storage::delete($surat_keluar->file);

        }

        $surat_keluar = $surat_keluar -> delete();

            if($surat_keluar){
                return back()->withSuccess('Data berhasil dihapus');
            }else{
                return back()->withErrors('Data gagal dihapus');
            }
    }
}
