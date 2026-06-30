<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SewaAlat;

class UserSewaAlatController extends Controller
{
    public function index()
    {
        $alat = SewaAlat::latest()->get();

        return view('layanan.sewa-alat', compact('alat'));
    }
}