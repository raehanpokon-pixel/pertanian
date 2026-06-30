<x-layout-admin>

    <div class="p-6">
        <form action="{{ route('admin.struktur.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nama --}}
            <input type="text"
                   name="nama"
                   placeholder="Nama"
                   class="border w-full p-2 mb-3 rounded">

            {{-- Jabatan --}}
            <select name="jabatan"
                    id="jabatan"
                    class="border w-full p-2 mb-3 rounded"
                    onchange="toggleAtasan()">
                <option value="">-- Pilih Jabatan --</option>
                <option value="Kepala Dinas">Kepala Dinas</option>
                <option value="Wakil Kepala Dinas">Wakil Kepala Dinas</option>
                <option value="Sekretaris">Sekretaris</option>
                <option value="Kabid">Kabid</option>
                <option value="Subbag">Subbag</option>
            </select>

            <input type="text"
       name="bidang"
       placeholder="Bidang / Bagian"
       class="border w-full p-2 mb-3 rounded">

            {{-- NIP --}}
            <input type="number"
                   name="nip"
                   placeholder="NIP"
                   class="border w-full p-2 mb-3 rounded">

            {{-- Foto --}}
            <input type="file"
                   name="foto"
                   class="border w-full p-2 mb-3 rounded">

            {{-- Dropdown Atasan --}}
            <div id="atasanBox" class="mb-4 hidden">
                <label class="block mb-2 font-semibold">
                    Pilih Atasan
                </label>

                <select name="parent_id" class="w-full border rounded p-2">
                    <option value="">-- Pilih Atasan --</option>

                    @foreach($strukturs as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->jabatan }} - {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                    class="bg-green-600 text-white px-4 py-2 rounded">
                Simpan
            </button>
        </form>
    </div>

    <script>
        function toggleAtasan() {
            let jabatan = document.getElementById('jabatan').value;
            let atasanBox = document.getElementById('atasanBox');

            if (jabatan === 'Kepala Dinas') {
                atasanBox.classList.add('hidden');
            } else {
                atasanBox.classList.remove('hidden');
            }
        }
    </script>

</x-layout-admin>