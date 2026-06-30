<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambar = $request->file('gambar')->store('slider', 'public');

        Slider::create([
            'judul' => 'Slider',
            'tipe' => $request->tipe,
            'gambar' => $gambar,
        ]);

        return redirect()
            ->route('admin.slider.index')
            ->with('success', 'Slider berhasil ditambahkan');
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'tipe' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'tipe' => $request->tipe,
        ];

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($slider->gambar);

            $data['gambar'] = $request
                ->file('gambar')
                ->store('slider', 'public');
        }

        $slider->update($data);

        return redirect()
            ->route('admin.slider.index')
            ->with('success', 'Slider berhasil diupdate');
    }

    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->gambar);
        $slider->delete();

        return back()->with('success', 'Slider berhasil dihapus');
    }
}