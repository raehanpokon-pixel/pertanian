<x-layout-admin>

<div class="p-6 max-w-3xl mx-auto">

    <div class="bg-white rounded-2xl shadow-lg p-8">

        <h1 class="text-3xl font-bold mb-8 text-slate-800">
            Edit Struktur Organisasi
        </h1>

        <form action="{{ route('admin.struktur.update', $struktur->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div class="mb-5">
                <label class="block mb-2 font-semibold">
                    Nama
                </label>

                <input type="text"
                       name="nama"
                       value="{{ $struktur->nama }}"
                       class="border w-full p-3 rounded-xl">
            </div>

            {{-- Jabatan --}}
            <div class="mb-5">
                <label class="block mb-2 font-semibold">
                    Jabatan
                </label>

                <select name="jabatan"
                        id="jabatan"
                        onchange="toggleAtasan()"
                        class="border w-full p-3 rounded-xl">

                    <option value="Kepala Dinas"
                        {{ $struktur->jabatan == 'Kepala Dinas' ? 'selected' : '' }}>
                        Kepala Dinas
                    </option>

                    <option value="Wakil Kepala Dinas"
                        {{ $struktur->jabatan == 'Wakil Kepala Dinas' ? 'selected' : '' }}>
                        Wakil Kepala Dinas
                    </option>

                    <option value="Sekretaris"
                        {{ $struktur->jabatan == 'Sekretaris' ? 'selected' : '' }}>
                        Sekretaris
                    </option>

                    <option value="Kabid"
                        {{ $struktur->jabatan == 'Kabid' ? 'selected' : '' }}>
                        Kabid
                    </option>

                    <option value="Staff"
                        {{ $struktur->jabatan == 'Staff' ? 'selected' : '' }}>
                        Staff
                    </option>

                </select>
            </div>

            {{-- Atasan --}}
            <div id="atasanBox"
                 class="mb-5 {{ $struktur->jabatan == 'Kepala Dinas' ? 'hidden' : '' }}">

                <label class="block mb-2 font-semibold">
                    Pilih Atasan
                </label>

                <select name="parent_id"
                        class="border w-full p-3 rounded-xl">

                    <option value="">
                        -- Pilih Atasan --
                    </option>

                    @foreach($strukturs as $item)

                        <option value="{{ $item->id }}"
                            {{ $struktur->parent_id == $item->id ? 'selected' : '' }}>

                            {{ $item->jabatan }} - {{ $item->nama }}

                        </option>

                    @endforeach

                </select>

                <div class="mb-5">

    <label class="block mb-2 font-semibold">
        Bidang / Bagian
    </label>

    <input type="text"
           name="bidang"
           value="{{ $struktur->bidang }}"
           class="border w-full p-3 rounded-xl">

</div>
            </div>

            {{-- NIP --}}
            <div class="mb-5">
                <label class="block mb-2 font-semibold">
                    NIP
                </label>

                <input type="number"
                       name="nip"
                       value="{{ $struktur->nip }}"
                       class="border w-full p-3 rounded-xl">
            </div>

            {{-- Foto Lama --}}
            <div class="mb-5">

                <label class="block mb-2 font-semibold">
                    Foto Saat Ini
                </label>

                <img src="{{ asset('storage/'.$struktur->foto) }}"
                     class="w-32 h-32 object-cover rounded-xl shadow">

            </div>

            {{-- Upload Foto --}}
            <div class="mb-8">

                <label class="block mb-2 font-semibold">
                    Ganti Foto
                </label>

                <input type="file"
                       name="foto"
                       class="border w-full p-3 rounded-xl">

            </div>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg">

                Update Data

            </button>

        </form>

    </div>

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