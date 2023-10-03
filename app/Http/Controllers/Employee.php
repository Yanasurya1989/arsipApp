<?php

namespace App\Http\Controllers;

use App\Models\M_employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class Employee extends Controller
{
    public function index(){
        $employee = M_employee::all();
        return view('backend.nominatif.index', compact('employee'));
    }

    public function employee_form(){
        return view('backend/nominatif/insert');
    }

    public function add_process(Request $request){
        // perintah untuk validasi data
        $validator = Validator::make($request->all(),[
            'foto' => 'required', 
            'nama_guru' => 'required', 
            'jenis_kelamin' => 'required', 
            'nip' => 'required', 
            'nuptk' => 'required', 
            'status_kepegawaian' => 'required', 
            'agama' => 'required',            
            'tempat_lahir' => 'required', 
            'tanggal' => 'required',
            'tmt' => 'required',
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'ketugasan_pokok' => 'required',
            'jp' => 'required',
            'tugas_tambahan' => 'required',
            'serdik' => 'required',
            'telp' => 'required',
        ]);



        // jika data error akan mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'nama_guru' => $request->nama_guru, 
            'jenis_kelamin' => $request->jenis_kelamin, 
            'nip' => $request->nip, 
            'nuptk' => $request->nuptk, 
            'status_kepegawaian' => $request->status_kepegawaian, 
            'agama' => $request->agama, 
            'tempat_lahir' => $request->tempat_lahir, 
            'tanggal' => $request->tanggal,
            'tmt' => $request->tmt,
            'pendidikan' => $request->pendidikan,
            'jurusan' => $request->jurusan,
            'ketugasan_pokok' => $request->ketugasan_pokok,
            'jp' => $request->jp,
            'tugas_tambahan' => $request->tugas_tambahan,
            'serdik' => $request->serdik,
            'telp' => $request->telp,
           
        ];

        

        if($request->hasFile('foto')){
            $foto = $request->file('foto');

            $path = Storage::putFileAs('public/images',$foto,$foto->getClientOriginalName());
            $data['foto'] = $path;
        }

        // jika tidak eror akan menambahkan data ke database
        $employee = M_employee::create($data);

        // jika berhasil ditambahkan akan dikembalikan ke index
        if($employee){
            return Redirect()->to('/nominatif/view')->withSuccess('Data berhasil ditambahkan');
        }else{

            // jika gagal akan dipindahkan  ke form lagi
            return back()->withErrors('Data gagal ditambahkan');
        }
    }

    public function detil(M_employee $employee){
        return view('backend.nominatif.detil', compact('employee'));
    }

    public function delete(M_employee $employee){
        
        if(Storage::get($employee->foto)){
            Storage::delete($employee->foto);
            
        }

        $employee = $employee -> delete();
            
            if($employee){
                return back()->withSuccess('Data berhasil dihapus');
            }else{
                return back()->withErrors('Data gagal dihapus');
            }
    }

    public function edit_form(M_employee $employee){
        return view('backend.nominatif.edit_form', compact('employee'));
    }

    public function update(Request $request, M_employee $employee){

        // validasi data
        $validator = Validator::make($request->all(), [
            'foto' => 'required', 
            'nama_guru' => 'required', 
            'jenis_kelamin' => 'required', 
            'nip' => 'required', 
            'nuptk' => 'required', 
            'status_kepegawaian' => 'required', 
            'agama' => 'required',            
            'tempat_lahir' => 'required', 
            'tanggal' => 'required',
            'tmt' => 'required',
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'ketugasan_pokok' => 'required',
            'jp' => 'required',
            'tugas_tambahan' => 'required',
            'serdik' => 'required',
            'telp' => 'required',
        ]);

        // menampilkan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'nama_guru' => $request->nama_guru, 
            'jenis_kelamin' => $request->jenis_kelamin, 
            'nip' => $request->nip, 
            'nuptk' => $request->nuptk, 
            'status_kepegawaian' => $request->status_kepegawaian, 
            'agama' => $request->agama, 
            'tempat_lahir' => $request->tempat_lahir, 
            'tanggal' => $request->tanggal,
            'tmt' => $request->tmt,
            'pendidikan' => $request->pendidikan,
            'jurusan' => $request->jurusan,
            'ketugasan_pokok' => $request->ketugasan_pokok,
            'jp' => $request->jp,
            'tugas_tambahan' => $request->tugas_tambahan,
            'serdik' => $request->serdik,
            'telp' => $request->telp,
        ];

        if($request->hasFile('foto')){
            if(Storage::get($employee->foto)){
                Storage::delete($employee->foto);
                
            }

            $foto = $request->file('foto');

            $path = Storage::putFileAs('public/images',$foto,$foto->getClientOriginalName());
            $data['foto'] = $path;
        }

        // jika data tidak eror maka yang ada di database diganti data form
        $employee = $employee->update($data);

        if($employee){

            // jika berhasil update tambahkan ke tampilan index
            return Redirect()->to('/nominatif/view')->withSuccess('data berhasil diubah');
        }else{

            // jika gagal update maka akan dikembalikan ke form dengan pesan eror
            return back()->withErrors('data gagal diubah');
        }
    }

    
}
