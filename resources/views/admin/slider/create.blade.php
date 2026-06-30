<x-layout-admin>
    <div class="p-8 max-w-xl">

        <h1 class="text-2xl font-bold mb-6">
            Tambah Gambar Slider
        </h1>

        <form action="{{ route('admin.slider.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="bg-white p-6 rounded-xl shadow space-y-5">

            @csrf

            {{-- judul slider --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Judul Slider
                </label>

                <input type="text"
                       name="judul"
                       value="{{ old('judul') }}"
                       required
                       class="w-full border rounded-lg p-3"
                       placeholder="Masukkan judul slider">

                @error('judul')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- pilih halaman --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Pilih Halaman
                </label>

                <select name="tipe"
                        class="w-full border rounded-lg p-3">

                    <option value="home">Slider Home</option>
                    <option value="layanan">Slider Layanan</option>
                </select>

                @error('tipe')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- upload gambar --}}
            <div>
                <label class="block mb-2 font-semibold">
                    Upload Gambar
                </label>

                <input type="file"
                       name="gambar"
                       required
                       class="w-full border rounded-lg p-3">

                @error('gambar')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- tombol --}}
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-green-600 text-white px-5 py-3 rounded-lg hover:bg-green-700">
                    Simpan
                </button>

                <a href="{{ route('admin.slider.index') }}"
                   class="bg-gray-500 text-white px-5 py-3 rounded-lg hover:bg-gray-600">
                    Kembali
                </a>
            </div>

        </form>
    </div>
</x-layout-admin>