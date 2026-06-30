<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        // artikel
        $artikels = Artikel::latest()->paginate(3);

        // slider khusus home
        $homeSliders = Slider::where('tipe', 'home')->get();

        // slider khusus layanan
        $layananSliders = Slider::where('tipe', 'layanan')->get();

        return view('home', compact(
            'artikels',
            'homeSliders',
            'layananSliders'
        ));
         }
    
    
}