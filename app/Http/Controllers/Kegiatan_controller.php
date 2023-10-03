<?php

namespace App\Http\Controllers;

use App\Models\M_kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Kegiatan_controller extends Controller
{
    public function index(){
        $kegiatan = M_kegiatan::all();
        return view('backend.kegiatan.index', compact('kegiatan'));
    }

    public function insert_form(){
        return view('backend.letter.add_letter');
    }

    public function table(){
        // M_letter adalah model
        $kegiatan = M_kegiatan::all();

        // compact untuk menampilkan seluruh data dari db
        return view('backend.kegiatan', compact('kegiatan'));
    }

    public function delete(M_letter $letter){

        if(Storage::get($letter->file)){
            Storage::delete($letter->file);

        }

        $letter = $letter -> delete();

            if($letter){
                return back()->withSuccess('Data berhasil dihapus');
            }else{
                return back()->withErrors('Data gagal dihapus');
            }
    }

    public function add_process(Request $request){
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'lampiran' => 'required',
            'pengirim' => 'required',
            'tanggal' => 'required',
            'nomer_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
        ]);



        // jika data error akan mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'lampiran' => $request->lampiran,
            'pengirim' => $request->pengirim,
            'tanggal' => $request->tanggal,
            'nomer_surat' => $request->nomer_surat,
            'perihal' => $request->perihal,
            'file' => $request->file,

        ];



        if($request->hasFile('file')){
            $file = $request->file('file');

            $path = Storage::putFileAs('public/images',$file,$file->getClientOriginalName());
            $data['file'] = $path;
        }

        // jika tidak eror akan menambahkan data ke database
        $book = M_letter::create($data);

        // jika berhasil ditambahkan akan dikembalikan ke index
        if($book){
            return Redirect()->to('/admin/table')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }

    public function edit_form(M_letter $letter){

        return view('backend.letter.edit_form', compact('letter'));
    }
}
