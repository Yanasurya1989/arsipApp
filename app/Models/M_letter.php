<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_letter extends Model
{
    use HasFactory;
    protected $table = 'tb_letter';
    protected $primaryKey = 'id_letter';
    protected $fillable = [
        'lampiran', 
        'pengirim', 
        'tanggal', 
        'nomer_surat',
        'perihal',
        'file',
    ];
}
