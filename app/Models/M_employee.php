<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_employee extends Model
{
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'foto',
        'nama_guru', 
        'jenis_kelamin',
        'nip',
        'nuptk',
        'status_kepegawaian',
        'agama',
        'tempat_lahir', 
        'tanggal', 
        'tmt',
        'pendidikan',
        'jurusan',
        'ketugasan_pokok',
        'jp',
        'tugas_tambahan',
        'serdik',
        'telp',
        'eska',
        'tahun_eska',
        
    ];
}
