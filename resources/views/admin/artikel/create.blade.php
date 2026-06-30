<x-layout-admin>
    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800 tracking-tighter uppercase italic">
            Buat Artikel Baru
        </h1>
    </div>

    <div class="bg-white rounded-[32px] p-10 border border-slate-100 shadow-sm max-w-4xl">
        <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Judul Artikel --}}
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">
                    Judul Artikel
                </label>

                <input
                    type="text"
                    name="judul"
                    value="{{ old('judul') }}"
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-2 focus:ring-green-500 outline-none transition-all">

                @error('judul')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Kategori Artikel --}}
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">
                    Kategori Artikel
                </label>

                <select
                    name="kategori"
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-2 focus:ring-green-500 outline-none transition-all">

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    <option value="edukasi"
                        {{ old('kategori') == 'edukasi' ? 'selected' : '' }}>
                        Edukasi
                    </option>

                    <option value="kegiatan"
                        {{ old('kategori') == 'kegiatan' ? 'selected' : '' }}>
                        Kegiatan
                    </option>

                </select>

                @error('kategori')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Upload Foto --}}
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">
                    Unggah Foto
                </label>

                <input
                    type="file"
                    name="gambar"
                    class="w-full text-sm text-slate-500
                    file:mr-4
                    file:py-2
                    file:px-4
                    file:rounded-full
                    file:border-0
                    file:text-xs
                    file:font-black
                    file:bg-green-50
                    file:text-green-700
                    hover:file:bg-green-100">

                @error('gambar')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Isi Konten --}}
            <div>
                <label class="block text-[10px] font-black uppercase tracking-widest text-slate-400 mb-2">
                    Isi Konten
                </label>

                <textarea
                    name="konten"
                    rows="8"
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl focus:ring-2 focus:ring-green-500 outline-none transition-all">{{ old('konten') }}</textarea>

                @error('konten')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Tombol --}}
            <button
                type="submit"
                class="bg-[#164d27] text-white px-10 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-xl hover:shadow-green-900/20 transition-all">
                Tayangkan Sekarang
            </button>

        </form>
    </div>
</x-layout-admin>