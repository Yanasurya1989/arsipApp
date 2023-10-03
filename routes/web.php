<?php

use App\Http\Controllers\Admin_controller;
use App\Http\Controllers\Auth_controller;
use App\Http\Controllers\Employee;
use App\Http\Controllers\Prestasi_controller;
use App\Http\Controllers\Skep_controller;
use App\Http\Controllers\Kegiatan_controller;
use App\Http\Controllers\Surat_keluar;
use App\Http\Controllers\Kerjasama;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login',[Auth_controller::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[Auth_controller::class, 'authenticating']);
Route::get('/logout',[Auth_controller::class, 'logout'])->middleware('auth');

Route::get('/admin/dashboard',[Admin_controller::class, 'index'])->middleware('auth');
Route::get('/admin/table',[Admin_controller::class, 'table'])->middleware('auth');
Route::get('/admin/letter_form',[Admin_controller::class, 'insert_form'])->middleware('auth');
Route::post('/admin/letter_form_add',[Admin_controller::class, 'add_process'])->middleware('auth');
Route::get('/surat_masuk/delete/{letter}',[Admin_controller::class, 'delete'])->middleware('auth');
Route::get('/surat_masuk/edit/{letter}',[Admin_controller::class, 'edit_form'])->middleware('auth');

// nominatif
Route::get('/nominatif/view',[Employee::class, 'index'])->middleware('auth');
Route::get('/employee/insert', [Employee::class, 'employee_form'])->middleware('auth');
Route::post('/employee/insert_process', [Employee::class, 'add_process'])->middleware('auth');
Route::get('/employee/detil/{employee}', [Employee::class, 'detil'])->middleware('auth');
Route::get('/employee/delete/{employee}', [Employee::class, 'delete'])->middleware('auth');
Route::get('/employee/edit_form/{employee}', [Employee::class, 'edit_form'])->middleware('auth');
Route::post('/employee/update/{employee}', [Employee::class, 'update'])->middleware('auth');

// surat keluar
Route::get('surat_keluar/view', [Surat_keluar::class, 'index'])->middleware('auth');
Route::get('surat_keluar/form_insert', [Surat_keluar::class, 'form_insert'])->middleware('auth');
Route::post('surat_keluar/add', [Surat_keluar::class, 'add_process'])->middleware('auth');
Route::get('surat_keluar/delete/{surat_keluar}', [Surat_keluar::class, 'delete']);
Route::get('surat_keluar/edit/{surat_keluar}', [Surat_keluar::class, 'edit']);

// Prestasi
Route::get('/prestasi/view', [Prestasi_controller::class, 'index'])->middleware('auth');
Route::get('/prestasi/insert', [Prestasi_controller::class, 'insert_form'])->middleware('auth');
Route::post('/prestasi/add', [Prestasi_controller::class, 'add_process'])->middleware('auth');

// Dokumentasi Kegiatan
Route::get('/kegiatan/view', [Kegiatan_controller::class, 'index'])->middleware('auth');

// Skep
Route::get('/skep/view', [Skep_controller::class, 'index'])->middleware('auth');

// kerjasama
Route::get('/kerjasama/view', [Kerjasama::class, 'index']);
