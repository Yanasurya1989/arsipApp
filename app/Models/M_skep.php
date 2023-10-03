<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_skep extends Model
{
    use HasFactory;
    protected $table = 'tb_skep';
    protected $primaryKey = 'id_skep';
    protected $fillable = [
        'title',
        'tanggal',
        'file',
    ];
}
