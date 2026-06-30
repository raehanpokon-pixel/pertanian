<x-layout-admin>

    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800 uppercase">
            Edit Stok Bibit
        </h1>

        <p class="text-slate-500 mt-2">
            Perbarui data bibit pertanian
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">

        <form action="{{ route('admin.stok-bibit.update', $bibit->id) }}"
              method="POST"
              enctype="multipart/form-data"
              class="space-y-5">

            @csrf
            @method('PUT')

            {{-- Nama Bibit --}}
            <div>
                <label class="block font-semibold mb-2">Nama Bibit</label>
                <input type="text"
                       name="nama_bibit"
                       value="{{ old('nama_bibit', $bibit->nama_bibit) }}"
                       class="w-full border rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            {{-- Jenis --}}
            <div>
                <label class="block font-semibold mb-2">Jenis</label>
                <input type="text"
                       name="jenis"
                       value="{{ old('jenis', $bibit->jenis) }}"
                       class="w-full border rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            {{-- Stok --}}
            <div>
                <label class="block font-semibold mb-2">Stok</label>
                <input type="number"
                       name="stok"
                       value="{{ old('stok', $bibit->stok) }}"
                       class="w-full border rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>

            {{-- Status --}}
            <div>
                <label class="block font-semibold mb-2">Status</label>
                <select name="status"
                        class="w-full border rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-600">

                    <option value="Tersedia" {{ $bibit->status == 'Tersedia' ? 'selected' : '' }}>
                        Tersedia
                    </option>

                    <option value="Menipis" {{ $bibit->status == 'Menipis' ? 'selected' : '' }}>
                        Menipis
                    </option>

                    <option value="Habis" {{ $bibit->status == 'Habis' ? 'selected' : '' }}>
                        Habis
                    </option>

                </select>
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi"
                          rows="4"
                          class="w-full border rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-600">{{ old('deskripsi', $bibit->deskripsi) }}</textarea>
            </div>

            {{-- Gambar --}}
            <div>
                <label class="block font-semibold mb-2">Gambar</label>

                @if ($bibit->gambar)
                    <img src="{{ asset('storage/' . $bibit->gambar) }}"
                         class="w-32 h-32 object-cover rounded-xl mb-3 border">
                @endif

                <input type="file"
                       name="gambar"
                       class="w-full border rounded-xl p-3">
            </div>

            {{-- Button --}}
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-xl font-bold">
                    Update
                </button>

                <a href="{{ route('admin.stok-bibit.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 px-6 py-3 rounded-xl font-bold">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</x-layout-admin>