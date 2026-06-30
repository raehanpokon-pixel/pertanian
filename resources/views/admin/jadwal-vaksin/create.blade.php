<x-layout-admin>

    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800 uppercase">
            Tambah Jadwal Vaksin
        </h1>
        <p class="text-slate-500 mt-1">
            Tambahkan jadwal vaksin terbaru.
        </p>
    </div>

    <div class="bg-white rounded-[32px] p-8 border border-slate-100 shadow-sm max-w-4xl">
        <form action="{{ route('admin.jadwal-vaksin.store') }}" method="POST">
            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                {{-- Nama vaksin --}}
                <div>
                    <label class="block text-sm font-bold mb-2">
                        Nama Vaksin
                    </label>
                    <input type="text"
                           name="nama_vaksin"
                           value="{{ old('nama_vaksin') }}"
                           class="w-full border rounded-xl px-4 py-3">
                </div>

                {{-- Tanggal --}}
                <div>
                    <label class="block text-sm font-bold mb-2">
                        Tanggal
                    </label>
                    <input type="date"
                           name="tanggal"
                           value="{{ old('tanggal') }}"
                           class="w-full border rounded-xl px-4 py-3">
                </div>

                {{-- Jam --}}
                <div>
                    <label class="block text-sm font-bold mb-2">
                        Jam
                    </label>
                    <input type="time"
                           name="jam"
                           value="{{ old('jam') }}"
                           class="w-full border rounded-xl px-4 py-3">
                </div>

                {{-- Lokasi Kecamatan --}}
                <div>
                    <label class="block text-sm font-bold mb-2">
                        Lokasi Kecamatan
                    </label>

                    <select name="lokasi"
                        class="w-full border border-slate-300 rounded-xl px-4 py-3">

                        <option value="">-- Pilih Kecamatan --</option>

                        <option value="Kec. Blangkejeren">Kec. Blangkejeren</option>
                        <option value="Kec. Blangpegayon">Kec. Blangpegayon</option>
                        <option value="Kec. Kutapanjang">Kec. Kutapanjang</option>
                        <option value="Kec. Rikit Gaib">Kec. Rikit Gaib</option>

                    </select>
                </div>

                {{-- DESA BARU --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold mb-2">
                        Nama Desa
                    </label>

                    <input type="text"
                           name="desa"
                           value="{{ old('desa') }}"
                           class="w-full border rounded-xl px-4 py-3"
                           placeholder="Masukkan nama desa">
                </div>

            </div>

            {{-- Status --}}
            <div class="mt-6">
                <label class="block text-sm font-bold mb-2">
                    Status
                </label>

                <select name="status"
                        class="w-full border rounded-xl px-4 py-3">
                    <option value="Akan Datang">Akan Datang</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>

            <div class="mt-8 flex gap-4">
                <button type="submit"
                    class="bg-[#164d27] text-white px-6 py-3 rounded-xl font-bold">
                    Simpan Jadwal
                </button>

                <a href="{{ route('admin.jadwal-vaksin.index') }}"
                   class="bg-slate-200 px-6 py-3 rounded-xl font-bold">
                    Kembali
                </a>
            </div>

        </form>
    </div>

</x-layout-admin>