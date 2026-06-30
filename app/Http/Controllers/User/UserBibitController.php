<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Bibit;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Storage;

class UserBibitController extends Controller
{
    // ================= ADMIN INDEX =================
    public function index()
    {
        $bibits = Bibit::latest()->get();
        return view('admin.bibit.index', compact('bibits'));
    }

    // ================= CREATE =================
    public function create()
    {
        return view('admin.bibit.create');
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'nama_bibit' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('bibit', 'public');
        }

        Bibit::create([
            'nama_bibit' => $request->nama_bibit,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.stok-bibit.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // ================= EDIT =================
    public function edit($id)
    {
        $bibit = Bibit::findOrFail($id);
        return view('admin.bibit.edit', compact('bibit'));
    }

    // ================= UPDATE =================
    public function update(Request $request, $id)
    {
        $bibit = Bibit::findOrFail($id);

        $request->validate([
            'nama_bibit' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'status' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = $bibit->gambar;

        if ($request->hasFile('gambar')) {
            if ($bibit->gambar) {
                Storage::disk('public')->delete($bibit->gambar);
            }

            $gambar = $request->file('gambar')->store('bibit', 'public');
        }

        $bibit->update([
            'nama_bibit' => $request->nama_bibit,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.stok-bibit.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // ================= DELETE =================
    public function destroy($id)
    {
        $bibit = Bibit::findOrFail($id);

        if ($bibit->gambar) {
            Storage::disk('public')->delete($bibit->gambar);
        }

        $bibit->delete();

        return redirect()->route('admin.stok-bibit.index')
            ->with('success', 'Data berhasil dihapus');
    }

    // ================= KATALOG USER =================
    public function katalog()
    {
        $bibits = Bibit::latest()->get();

        return view('layanan.bibit', compact('bibits'));
    }
}