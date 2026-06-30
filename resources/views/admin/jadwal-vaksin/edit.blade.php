    <x-layout-admin>
        <div class="mb-8">
            <h1 class="text-3xl font-black text-slate-800 uppercase italic">
                Edit Jadwal Vaksin
            </h1>
        </div>

        <div class="bg-white rounded-[32px] p-10 border border-slate-100 shadow-sm max-w-4xl">
            <form action="{{ route('admin.jadwal-vaksin.update', $jadwal->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Nama vaksin --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Nama Vaksin
                    </label>
                    <input
                        type="text"
                        name="nama_vaksin"
                        value="{{ old('nama_vaksin', $jadwal->nama_vaksin) }}"
                        class="w-full px-5 py-3 border rounded-xl"
                    >
                </div>

                {{-- Tanggal --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Tanggal
                    </label>
                    <input
                        type="date"
                        name="tanggal"
                        value="{{ old('tanggal', $jadwal->tanggal) }}"
                        class="w-full px-5 py-3 border rounded-xl"
                    >
                </div>

                {{-- Jam --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Jam
                    </label>
                    <input
                        type="time"
                        name="jam"
                        value="{{ old('jam', $jadwal->jam) }}"
                        class="w-full px-5 py-3 border rounded-xl"
                    >
                </div>

                {{-- Lokasi Kecamatan --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Lokasi Kecamatan
                    </label>

                    <select name="lokasi" class="w-full px-5 py-3 border rounded-xl">
                        <option value="Kec. Blangkejeren" {{ $jadwal->lokasi == 'Kec. Blangkejeren' ? 'selected' : '' }}>
                            Kec. Blangkejeren
                        </option>
                        <option value="Kec. Blangpegayon" {{ $jadwal->lokasi == 'Kec. Blangpegayon' ? 'selected' : '' }}>
                            Kec. Blangpegayon
                        </option>
                        <option value="Kec. Kutapanjang" {{ $jadwal->lokasi == 'Kec. Kutapanjang' ? 'selected' : '' }}>
                            Kec. Kutapanjang
                        </option>
                        <option value="Kec. Rikit Gaib" {{ $jadwal->lokasi == 'Kec. Rikit Gaib' ? 'selected' : '' }}>
                            Kec. Rikit Gaib
                        </option>
                    </select>
                </div>

                {{-- DESA BARU --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Nama Desa
                    </label>

                    <input
                        type="text"
                        name="desa"
                        value="{{ old('desa', $jadwal->desa) }}"
                        class="w-full px-5 py-3 border rounded-xl"
                        placeholder="Masukkan nama desa"
                    >
                </div>

                {{-- Status --}}
                <div>
                    <label class="block text-xs font-bold mb-2">
                        Status
                    </label>

                    <select name="status" class="w-full px-5 py-3 border rounded-xl">
                        <option value="Akan Datang" {{ $jadwal->status == 'Akan Datang' ? 'selected' : '' }}>
                            Akan Datang
                        </option>
                        <option value="Selesai" {{ $jadwal->status == 'Selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>
                    </select>
                </div>

                <button
                    type="submit"
                    class="bg-green-700 text-white px-8 py-3 rounded-xl font-bold"
                >
                    Update Jadwal
                </button>
            </form>
        </div>
    </x-layout-admin>