<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaFakultas'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }

}
