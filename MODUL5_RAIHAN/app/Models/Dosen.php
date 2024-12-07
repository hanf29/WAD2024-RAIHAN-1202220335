<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = [
        'id',
        'kode_dosen',
        'nama_dosen',
        'nip',
        'email',
        'no_telepon',
    ];
    public $timestamps = false;

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'dosen_id');
    }
}
