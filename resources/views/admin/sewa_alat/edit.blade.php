<x-layout-admin>

<div class="mb-8">
    <h1 class="text-3xl font-bold text-slate-800">
        Edit Data Sewa Alat
    </h1>
</div>

<form action="{{ route('admin.sewa_alat.update', $alat->id) }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded-xl shadow space-y-5">

    @csrf
    @method('PUT')

    {{-- Nama Alat --}}
    <div>
        <label class="block font-semibold mb-2">
            Nama Alat
        </label>
        <input type="text"
               name="nama_alat"
               value="{{ old('nama_alat', $alat->nama_alat) }}"
               class="w-full border rounded-lg p-3"
               required>
    </div>

    {{-- Foto Lama --}}
    <div>
        <label class="block font-semibold mb-2">
            Foto Saat Ini
        </label>

        <img src="{{ asset('storage/'.$alat->foto) }}"
             class="w-40 rounded-lg border">
    </div>

    {{-- Upload Foto Baru --}}
    <div>
        <label class="block font-semibold mb-2">
            Ganti Foto (Opsional)
        </label>
        <input type="file"
               name="foto"
               class="w-full border rounded-lg p-3">
    </div>

    {{-- Deskripsi --}}
    <div>
        <label class="block font-semibold mb-2">
            Deskripsi
        </label>
        <textarea name="deskripsi"
                  rows="4"
                  class="w-full border rounded-lg p-3">{{ old('deskripsi', $alat->deskripsi) }}</textarea>
    </div>

    {{-- Harga --}}
    <div>
        <label class="block font-semibold mb-2">
            Harga per Hari
        </label>
        <input type="number"
               name="harga_per_hari"
               value="{{ old('harga_per_hari', $alat->harga_per_hari) }}"
               class="w-full border rounded-lg p-3"
               required>
    </div>

    {{-- Status --}}
    <div>
        <label class="block font-semibold mb-2">
            Status
        </label>

        <select name="status"
                class="w-full border rounded-lg p-3">

            <option value="Tersedia"
                {{ $alat->status == 'Tersedia' ? 'selected' : '' }}>
                Tersedia
            </option>

            <option value="Dipesan"
                {{ $alat->status == 'Dipesan' ? 'selected' : '' }}>
                Dipesan
            </option>

        </select>
    </div>

    {{-- Tombol --}}
    <div class="flex gap-3">
        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg">
            Update
        </button>

        <a href="{{ route('admin.sewa_alat.index') }}"
           class="bg-gray-400 text-white px-6 py-3 rounded-lg">
            Kembali
        </a>
    </div>

</form>

</x-layout-admin>