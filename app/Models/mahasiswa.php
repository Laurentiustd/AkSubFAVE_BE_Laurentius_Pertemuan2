<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'alamat',
        'foto',
        'birthdate',
        'fakultas_id'
    ];

    public function category()
    {
        return $this->belongsTo(fakultasa::class);
    }


}
