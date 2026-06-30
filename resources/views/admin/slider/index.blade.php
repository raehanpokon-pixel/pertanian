<x-layout-admin>
    <div class="p-8">

        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-slate-800">
                Kelola Slider
            </h1>

            <a href="{{ route('admin.slider.create') }}"
               class="bg-green-600 text-white px-5 py-3 rounded-lg hover:bg-green-700">
                + Tambah Slider
            </a>
        </div>

        {{-- pesan sukses --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-5">
                {{ session('success') }}
            </div>
        @endif

        {{-- jika kosong --}}
        @if($sliders->isEmpty())
            <div class="bg-white rounded-xl shadow p-10 text-center text-gray-500">
                Belum ada slider.
            </div>
        @endif

        {{-- daftar slider --}}
        <div class="space-y-5">
            @foreach($sliders as $index => $slider)
                <div class="bg-white rounded-xl shadow p-5 flex items-center justify-between">

                    {{-- kiri --}}
                    <div class="flex items-center gap-5">

                        {{-- gambar --}}
                        <img src="{{ asset('storage/' . $slider->gambar) }}"
                             class="w-36 h-24 object-cover rounded-lg border">

                        {{-- info --}}
                        <div>
                            <h2 class="font-bold text-lg text-slate-800">
                                {{ $slider->judul }}
                            </h2>

                            <p class="text-sm text-gray-600 mt-1">
                                Halaman:
                                <span class="font-semibold text-blue-600">
                                    {{ ucfirst($slider->tipe) }}
                                </span>
                            </p>

                            <p class="text-sm text-gray-500">
                                Slider ke-{{ $index + 1 }}
                            </p>
                        </div>
                    </div>

                    {{-- tombol --}}
                    <div class="flex gap-3">

                        <a href="{{ route('admin.slider.edit', $slider->id) }}"
                           class="bg-blue-500 text-white px-4 py-2 rounded-lg">
                            Edit
                        </a>

                        <form action="{{ route('admin.slider.destroy', $slider->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin hapus slider?')">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 text-white px-4 py-2 rounded-lg">
                                Hapus
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout-admin>