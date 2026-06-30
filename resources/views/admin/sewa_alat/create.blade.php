<x-layout-admin>

    <h1 class="text-3xl font-bold mb-8">
        Tambah Sewa Alat
    </h1>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.sewa_alat.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        {{-- Nama alat --}}
        <input type="text"
               name="nama_alat"
               placeholder="Nama alat"
               value="{{ old('nama_alat') }}"
               class="border p-3 w-full rounded"
               required>

        {{-- Foto --}}
        <input type="file"
               name="foto"
               class="border p-3 w-full rounded"
               required>

        {{-- Deskripsi --}}
        <textarea name="deskripsi"
                  placeholder="Deskripsi"
                  class="border p-3 w-full rounded"
                  required>{{ old('deskripsi') }}</textarea>

        {{-- Harga --}}
        <input type="number"
               name="harga_per_hari"
               placeholder="Harga per hari"
               value="{{ old('harga_per_hari') }}"
               class="border p-3 w-full rounded"
               required>

        {{-- Status --}}
        <select name="status"
                class="border p-3 w-full rounded"
                required>

            <option value="Tersedia">Tersedia</option>
            <option value="Dipesan">Dipesan</option>

        </select>

        {{-- Tombol submit --}}
        <button type="submit"
                class="bg-green-600 text-white px-6 py-3 rounded">
            Simpan
        </button>

    </form>

</x-layout-admin>