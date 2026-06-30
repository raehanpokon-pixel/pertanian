<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SewaAlat;
use Illuminate\Http\Request;

class SewaAlatController extends Controller
{
    
    public function index()
    {
        $alat = SewaAlat::latest()->get();

        return view('admin.sewa_alat.index', compact('alat'));
    }

    public function create()
    {
        return view('admin.sewa_alat.create');
    }

        public function store(Request $request)
        {
            $request->validate([
                'nama_alat' => 'required',
                'foto' => 'required|image',
                'harga_per_hari' => 'required',
                'status' => 'required',
            ]);

        $foto = $request->file('foto')
                        ->store('sewa_alat', 'public');

        SewaAlat::create([
            'nama_alat' => $request->nama_alat,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
            'harga_per_hari' => $request->harga_per_hari,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.sewa_alat.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
    $alat = SewaAlat::findOrFail($id);

    // hapus foto dari storage
    if ($alat->foto && \Storage::disk('public')->exists($alat->foto)) {
        \Storage::disk('public')->delete($alat->foto);
    }

    // hapus data dari database
    $alat->delete();

    return redirect()
        ->route('admin.sewa_alat.index')
        ->with('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
    $alat = SewaAlat::findOrFail($id);

    return view('admin.sewa_alat.edit', compact('alat'));
    }

    public function update(Request $request, $id)
{
    $alat = SewaAlat::findOrFail($id);

    $request->validate([
        'nama_alat' => 'required',
        'deskripsi' => 'required',
        'harga_per_hari' => 'required',
        'status' => 'required',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:20480',
    ]);

    $data = [
        'nama_alat' => $request->nama_alat,
        'deskripsi' => $request->deskripsi,
        'harga_per_hari' => $request->harga_per_hari,
        'status' => $request->status,
    ];

    // kalau upload foto baru
    if ($request->hasFile('foto')) {

        // hapus foto lama
        if ($alat->foto && file_exists(storage_path('app/public/' . $alat->foto))) {
            unlink(storage_path('app/public/' . $alat->foto));
        }

        $data['foto'] = $request->file('foto')
            ->store('sewa_alat', 'public');
    }

    $alat->update($data);

    return redirect()
        ->route('admin.sewa_alat.index')
        ->with('success', 'Data berhasil diupdate');
}
}