<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Struktur; 
class UserStrukturOrganisasiController extends Controller
{
    public function index()
{
    $strukturs = Struktur::with('childrenRecursive')
        ->whereNull('parent_id')
        ->get();

    return view('struktur', compact('strukturs'));
}
}