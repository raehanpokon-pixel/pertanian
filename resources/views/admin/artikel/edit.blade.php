<x-layout-admin>

    <div class="p-8">

        <h1 class="text-2xl font-bold mb-6">
            Edit Artikel
        </h1>

        <form
            action="{{ route('admin.artikel.update', $artikel->id) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <input
                type="text"
                name="judul"
                value="{{ $artikel->judul }}"
                class="border p-2 w-full mb-4 rounded">

            {{-- Gambar Lama --}}
            <img
                src="{{ asset($artikel->gambar) }}"
                class="w-60 mb-4 rounded shadow">

            {{-- Upload Gambar Baru --}}
            <input
                type="file"
                name="gambar"
                class="mb-4 w-full border p-2 rounded">

            {{-- Konten --}}
            <textarea
                name="konten"
                rows="10"
                class="border p-2 w-full mb-4 rounded">{{ $artikel->konten }}</textarea>

            {{-- Tombol --}}
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

                Update

            </button>

        </form>

    </div>

</x-layout-admin>