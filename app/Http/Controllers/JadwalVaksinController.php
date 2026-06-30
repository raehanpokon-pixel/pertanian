<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalVaksin;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalVaksinController extends Controller
{
    // Tampilkan semua jadwal
    public function index()
    {
        $jadwals = JadwalVaksin::latest()->get();
        return view('admin.jadwal-vaksin.index', compact('jadwals'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.jadwal-vaksin.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_vaksin' => 'required',
            'tanggal'     => 'required',
            'jam'         => 'required',
            'lokasi'      => 'required',
            'desa'        => 'required',
            'status'      => 'required',
        ]);

        JadwalVaksin::create([
            'nama_vaksin' => $request->nama_vaksin,
            'tanggal'     => $request->tanggal,
            'jam'         => $request->jam,
            'lokasi'      => $request->lokasi,
            'desa'        => $request->desa,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.jadwal-vaksin.index')
            ->with('success', 'Jadwal berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $jadwal = JadwalVaksin::findOrFail($id);

        return view('admin.jadwal-vaksin.edit', compact('jadwal'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_vaksin' => 'required',
            'tanggal'     => 'required',
            'jam'         => 'required',
            'lokasi'      => 'required',
            'desa'        => 'required',
            'status'      => 'required',
        ]);

        $jadwal = JadwalVaksin::findOrFail($id);

        $jadwal->update([
            'nama_vaksin' => $request->nama_vaksin,
            'tanggal'     => $request->tanggal,
            'jam'         => $request->jam,
            'lokasi'      => $request->lokasi,
            'desa'        => $request->desa,
            'status'      => $request->status,
        ]);

        return redirect()
            ->route('admin.jadwal-vaksin.index')
            ->with('success', 'Jadwal berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $jadwal = JadwalVaksin::findOrFail($id);
        $jadwal->delete();

        return redirect()
            ->route('admin.jadwal-vaksin.index')
            ->with('success', 'Jadwal berhasil dihapus');
    }

    public function downloadPdf()
    {
        $jadwals = JadwalVaksin::orderBy('tanggal')->get();

        $pdf = Pdf::loadView('admin.jadwal-vaksin.pdf', compact('jadwals'));

        return $pdf->download('Kalender-Vaksinasi.pdf');
    }
}