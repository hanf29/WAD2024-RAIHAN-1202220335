<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email',
        'jurusan',
        'dosen_id',
    ];
    public $timestamps = false;

    public function dosens()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    
}
