<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $table = 'mahasiswa';
        protected $fillable = [
            'nama', 'tanggal_lahir', 'alamat', 'nim', 'perguruan_tinggi', 'jenjang pendidikan', 'angkatan', 'email', 'no_telp', 'jurusan', 'fakultas'
        ];
}
