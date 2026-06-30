<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
protected $fillable = [
    'nama',
    'jabatan',
    'bidang',
    'nip',
    'foto',
    'parent_id'
];

    public function parent()
    {
        return $this->belongsTo(Struktur::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Struktur::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}