<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JadwalVaksin;
use Barryvdh\DomPDF\Facade\Pdf;

class UserJadwalVaksinController extends Controller
{
    public function index()
    {
        $jadwals = JadwalVaksin::orderBy('tanggal', 'asc')->get();

        return view('layanan.jadwal-vaksin', compact('jadwals'));
    }
        public function downloadPdf()
    {
        $jadwals = JadwalVaksin::orderBy('tanggal')->get();

        $pdf = Pdf::loadView('pdf.jadwal-vaksin', compact('jadwals'));

        return $pdf->download('Kalender-Vaksin.pdf');
    }
}