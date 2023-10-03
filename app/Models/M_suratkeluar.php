<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_suratkeluar extends Model
{
    use HasFactory;
    protected $table = 'tb_suratkeluar';
    protected $primaryKey = 'id_suratkeluar';
    protected $fillable = [
        'tujuan',
        'tanggal',
        'nomer',
        'kode_surat',
        'perihal',
        'nomer_petunjuk',
        'keterangan',
        'file',
    ];
}
