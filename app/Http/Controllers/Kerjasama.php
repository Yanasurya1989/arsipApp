<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kerjasama extends Controller
{
    public function index(){
        return view('backend.kerjasama.index');
    }
}
