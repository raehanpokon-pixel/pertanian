<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SewaAlat extends Model
{
    protected $fillable = [
        'nama_alat',
        'foto',
        'deskripsi',
        'harga_per_hari',
        'status',
    ];
}