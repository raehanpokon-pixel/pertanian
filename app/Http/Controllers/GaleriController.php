<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // tampil data
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.galeri.index', compact('galeris'));
    }

    // halaman tambah
    public function create()
    {
        return view('admin.galeri.create');
    }

    // simpan data
    public function store(Request $request)
    {
        try {

            $request->validate([
                'judul' => 'required',
                'foto' => 'required|image|mimes:jpg,jpeg,png|max:10240',
                'deskripsi' => 'nullable',
            ]);

            // upload foto
            $namaFoto = null;

            if ($request->hasFile('foto')) {

                $namaFoto = time() . '.' . $request->foto->extension();

                $request->foto->move(
                    public_path('uploads'),
                    $namaFoto
                );
            }

            // simpan database
            Galeri::create([
                'judul' => $request->judul,
                'foto' => $namaFoto,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()
                ->route('admin.galeri.index')
                ->with('success', 'Data berhasil disimpan');

        } catch (\Exception $e) {

            dd($e->getMessage());
        }
    }

    // halaman edit
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view(
            'admin.galeri.edit',
            compact('galeri')
        );
    }

    // update data
    public function update(Request $request, $id)
    {
        try {

            $galeri = Galeri::findOrFail($id);

            $request->validate([
                'judul' => 'required',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
                'deskripsi' => 'nullable',
            ]);

            // cek jika upload foto baru
            if ($request->hasFile('foto')) {

                // upload foto baru
                $namaFoto = time() . '.' . $request->foto->extension();

                $request->foto->move(
                    public_path('uploads'),
                    $namaFoto
                );

                // simpan nama foto baru
                $galeri->foto = $namaFoto;
            }

            // update data
            $galeri->judul = $request->judul;
            $galeri->deskripsi = $request->deskripsi;

            $galeri->save();

            return redirect()
                ->route('admin.galeri.index')
                ->with('success', 'Data berhasil diupdate');

        } catch (\Exception $e) {

            dd($e->getMessage());
        }
    }

    // hapus data
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        $galeri->delete();

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Data berhasil dihapus');
    }

            public function userGaleri()
        {
            $galeris = Galeri::latest()->get();

            return view('galeri', compact('galeris'));
        }
}