<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $strukturs = Struktur::with('childrenRecursive')
            ->whereNull('parent_id')
            ->get();

        return view('admin.struktur.index', compact('strukturs'));
    }

    public function create()
    {
        $strukturs = Struktur::all();

        return view('admin.struktur.create', compact('strukturs'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
    'nama' => 'required',
    'jabatan' => 'required',
    'bidang' => 'nullable',
    'nip' => 'required',
    'foto' => 'nullable|image',
    'parent_id' => 'nullable'
]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('struktur', 'public');
        }

        Struktur::create($data);

        return redirect()->route('admin.struktur.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Struktur $struktur)
    {
        $strukturs = Struktur::where('id', '!=', $struktur->id)->get();

        return view('admin.struktur.edit', compact(
            'struktur',
            'strukturs'
        ));
    }

    public function update(Request $request, Struktur $struktur)
    {
        $request->validate([
    'nama' => 'required',
    'jabatan' => 'required',
    'bidang' => 'nullable',
    'nip' => 'required',
    'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
]);

        $foto = $struktur->foto;

        if ($request->hasFile('foto')) {
            if ($foto) {
                Storage::disk('public')->delete($foto);
            }

            $foto = $request->file('foto')->store('struktur', 'public');
        }

       $struktur->update([
    'nama' => $request->nama,
    'jabatan' => $request->jabatan,
    'bidang' => $request->bidang,
    'nip' => $request->nip,
    'foto' => $foto,
    'parent_id' => $request->parent_id
]);

        return redirect()->route('admin.struktur.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Struktur $struktur)
    {
        if ($struktur->foto) {
            Storage::disk('public')->delete($struktur->foto);
        }

        $struktur->delete();

        return redirect()->route('admin.struktur.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}