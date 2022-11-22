<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputhipmi extends Model
{
    public $table = 'inputhipmi';
    protected $fillable = [
        'nama', 'tanggal_lahir', 'deskripsi', 'pekerjaan', 'instansi'
    ];

}
