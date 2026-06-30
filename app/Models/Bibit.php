<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bibit extends Model
{
    protected $fillable = [
        'nama_bibit',
        'jenis',
        'stok',
        'status',
        'deskripsi',
        'gambar',
    ];
}