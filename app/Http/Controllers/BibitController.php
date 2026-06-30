<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibit;
use Illuminate\Support\Facades\Storage;

class BibitController extends Controller
{
    // ===============================
    // HALAMAN INDEX
    // ===============================
    public function index()
    {
        $bibits = Bibit::latest()->get();

        return view('admin.bibit.index', compact('bibits'));
    }

    // ===============================
    // HALAMAN CREATE
    // ===============================
    public function create()
    {
        return view('admin.bibit.create');
    }

    // ===============================
    // SIMPAN DATA
    // ===============================
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

        // upload gambar
        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar')
                ->store('bibit', 'public');
        }

        // simpan data
        Bibit::create([
            'nama_bibit' => $request->nama_bibit,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('admin.stok-bibit.index')
            ->with('success', 'Data bibit berhasil ditambahkan');
    }

    // ===============================
    // HALAMAN EDIT
    // ===============================
    public function edit($id)
    {
        $bibit = Bibit::findOrFail($id);

        return view('admin.bibit.edit', compact('bibit'));
    }

    // ===============================
    // UPDATE DATA
    // ===============================
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

        // cek upload gambar baru
        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($bibit->gambar) {
                Storage::disk('public')->delete($bibit->gambar);
            }

            // upload gambar baru
            $gambar = $request->file('gambar')
                ->store('bibit', 'public');
        }

        // update data
        $bibit->update([
            'nama_bibit' => $request->nama_bibit,
            'jenis' => $request->jenis,
            'stok' => $request->stok,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('admin.stok-bibit.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // ===============================
    // HAPUS DATA
    // ===============================
    public function destroy($id)
    {
        $bibit = Bibit::findOrFail($id);

        // hapus gambar
        if ($bibit->gambar) {
            Storage::disk('public')->delete($bibit->gambar);
        }

        // hapus data
        $bibit->delete();

        return redirect()
            ->route('admin.stok-bibit.index')
            ->with('success', 'Data berhasil dihapus');
    }
}