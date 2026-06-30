<x-layout-admin>

    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800 uppercase">
            Tambah Stok Bibit
        </h1>

        <p class="text-slate-500 mt-2">
            Tambahkan data bibit baru
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">

        <form action="{{ route('admin.stok-bibit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Nama Bibit --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Nama Bibit
                    </label>

                    <select
                        name="nama_bibit"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-700">

                        <option value="">
                            -- Pilih Nama Bibit --
                        </option>

                        <option value="Bibit Kopi"
                            {{ old('nama_bibit') == 'Bibit Kopi' ? 'selected' : '' }}>
                            Bibit Kopi
                        </option>

                        <option value="Bibit Durian"
                            {{ old('nama_bibit') == 'Bibit Durian' ? 'selected' : '' }}>
                            Bibit Durian
                        </option>

                        <option value="Bibit Bawang Merah"
                            {{ old('nama_bibit') == 'Bibit Bawang Merah' ? 'selected' : '' }}>
                            Bibit Bawang Merah
                        </option>

                    </select>

                    @error('nama_bibit')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Jenis Bibit (DIPERBAIKI) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Jenis Bibit
                    </label>

                    {{-- Jenis Bibit --}}


    <select
        name="jenis"
        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-700">

        <option value="">
            -- Pilih Jenis Bibit --
        </option>

        <option value="Tanaman Pangan"
            {{ old('jenis') == 'Tanaman Pangan' ? 'selected' : '' }}>
            Tanaman Pangan
        </option>

        <option value="Perkebunan"
            {{ old('jenis') == 'Perkebunan' ? 'selected' : '' }}>
            Perkebunan
        </option>

        <option value="Hortikultura"
            {{ old('jenis') == 'Hortikultura' ? 'selected' : '' }}>
            Hortikultura
        </option>

        <option value="Palawija"
            {{ old('jenis') == 'Palawija' ? 'selected' : '' }}>
            Palawija
        </option>

    </select>

    @error('jenis')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>
                    @error('jenis')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Stok --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Jumlah Stok
                    </label>

                    <input
                        type="number"
                        name="stok"
                        value="{{ old('stok') }}"
                        placeholder="Masukkan jumlah stok"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-700">

                    @error('stok')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Status --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-700">

                        <option value="">
                            -- Pilih Status --
                        </option>

                        <option value="Tersedia"
                            {{ old('status') == 'Tersedia' ? 'selected' : '' }}>
                            Tersedia
                        </option>

                        <option value="Menipis"
                            {{ old('status') == 'Menipis' ? 'selected' : '' }}>
                            Menipis
                        </option>

                        <option value="Habis"
                            {{ old('status') == 'Habis' ? 'selected' : '' }}>
                            Habis
                        </option>

                    </select>

                    @error('status')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            {{-- Deskripsi --}}
            <div class="mt-6">
                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    placeholder="Masukkan deskripsi bibit..."
                    class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-700">{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Upload Gambar --}}
            <div class="mt-6">
                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Gambar Bibit
                </label>

                <input
                    type="file"
                    name="gambar"
                    class="w-full border border-slate-300 rounded-xl px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-green-700">

                @error('gambar')
                    <p class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- Tombol --}}
            <div class="flex items-center gap-4 mt-8">

                <button
                    type="submit"
                    class="bg-[#164d27] hover:bg-green-800 text-white px-6 py-3 rounded-xl font-bold transition-all">

                    Simpan Bibit
                </button>

                <a href="{{ route('admin.stok-bibit.index') }}"
                   class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-6 py-3 rounded-xl font-bold transition-all">

                    Kembali
                </a>

            </div>

        </form>

    </div>

</x-layout-admin>