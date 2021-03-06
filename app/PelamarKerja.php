<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PelamarKerja extends Model
{
    protected $table ='pelamar_kerja';

    protected $fillable=[
        'nama',
        'email',
        'password',
        'tanggal_lahir',
        'alamat',
        'gender',
        'foto',
    ];

    use SoftDeletes;
}
