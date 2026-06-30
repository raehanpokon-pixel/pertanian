<x-layout-admin>
    <div class="p-8 max-w-xl">

        <h1 class="text-2xl font-bold mb-6">
            Edit Slider
        </h1>

        <form action="{{ route('admin.slider.update', $slider->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white p-6 rounded-xl shadow space-y-5">

            @csrf
            @method('PUT')

            {{-- pilih halaman --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Pilih Halaman
                </label>

                <select name="tipe" class="w-full border rounded-lg p-3">
                    <option value="home"
                        {{ $slider->tipe == 'home' ? 'selected' : '' }}>
                        Slider Home
                    </option>

                    <option value="layanan"
                        {{ $slider->tipe == 'layanan' ? 'selected' : '' }}>
                        Slider Layanan
                    </option>
                </select>
            </div>

            {{-- gambar lama --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Gambar Saat Ini
                </label>

                <img src="{{ asset('storage/' . $slider->gambar) }}"
                     class="w-full h-48 object-cover rounded-lg border">
            </div>

            {{-- upload gambar baru --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Ganti Gambar (opsional)
                </label>

                <input type="file"
                       name="gambar"
                       class="w-full border rounded-lg p-3">
            </div>

            {{-- tombol --}}
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-blue-600 text-white px-5 py-3 rounded-lg">
                    Update
                </button>

                <a href="{{ route('admin.slider.index') }}"
                   class="bg-gray-500 text-white px-5 py-3 rounded-lg">
                    Kembali
                </a>
            </div>

        </form>
    </div>
</x-layout-admin>