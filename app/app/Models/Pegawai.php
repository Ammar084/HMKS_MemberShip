<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $table = 'pegawai';
    protected $fillable = [
    'nama', 'tanggal_lahir', 'gelar', 'nip'
];
}
