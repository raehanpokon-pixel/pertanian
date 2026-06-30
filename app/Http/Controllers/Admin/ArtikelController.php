<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Halaman admin artikel
     */
    public function index()
    {
        $artikels = Artikel::latest()->get();

        return view('admin.artikel.index', compact('artikels'));
    }

    /**
     * Halaman user artikel
     */
    public function userIndex()
    {
        $artikels = Artikel::latest()->get();

        return view('artikel.index', compact('artikels'));
    }

    /**
     * Form tambah artikel
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Simpan artikel
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|max:255',
            'kategori' => 'required',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'konten'   => 'required',
        ]);

        $file = $request->file('gambar');

        // nama file unik
        $namaFile = time() . '_' . $file->getClientOriginalName();

        // simpan gambar
        $file->move(public_path('artikels'), $namaFile);

        // simpan ke database
        Artikel::create([
            'judul'    => $request->judul,
            'slug'     => Str::slug($request->judul),
            'kategori' => $request->kategori,
            'penulis'  => auth()->user()->name ?? 'Admin',
            'gambar'   => 'artikels/' . $namaFile,
            'isi'      => $request->konten,
        ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diterbitkan!');
    }

    /**
     * Form edit artikel
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('admin.artikel.edit', compact('artikel'));
    }

    /**
     * Update artikel
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $request->validate([
            'judul'    => 'required|max:255',
            'kategori' => 'required',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'konten'   => 'required',
        ]);

        // update gambar jika ada upload baru
        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
                unlink(public_path($artikel->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('artikels'), $namaFile);

            $artikel->gambar = 'artikels/' . $namaFile;
        }

        // update data
        $artikel->judul = $request->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->kategori = $request->kategori;
        $artikel->isi = $request->konten;

        $artikel->save();

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diupdate!');
    }

    /**
     * Hapus artikel
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($artikel->gambar && file_exists(public_path($artikel->gambar))) {
            unlink(public_path($artikel->gambar));
        }

        $artikel->delete();

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }

    public function show($id)
    {
    $artikel = Artikel::findOrFail($id);

    return view('artikel.artikel-detail', compact('artikel'));
    }
}