<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'tb_prestasi';
    protected $primaryKey = 'id_prestasi';
    protected $fillable = [
        'cabang',
        'juara',
        'tingkat',
        'sertifikat',
    ];
}
