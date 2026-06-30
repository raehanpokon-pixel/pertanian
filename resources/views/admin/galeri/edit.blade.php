<x-layout-admin>
    <div class="p-8">
        <h1 class="text-2xl font-bold mb-6">Edit Galeri</h1>

        <form action="{{ route('admin.galeri.update', $galeri->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Judul --}}
            <input type="text"
                   name="judul"
                   value="{{ $galeri->judul }}"
                   class="border p-2 w-full mb-4">

            {{-- Foto lama --}}
            <img src="{{ asset('uploads/' . $galeri->foto) }}"
                 class="w-40 mb-4 rounded">

            {{-- Upload foto baru --}}
            <input type="file" name="foto" class="mb-4">

            {{-- Deskripsi --}}
            <textarea name="deskripsi" class="border p-2 w-full mb-4">{{ $galeri->deskripsi }}</textarea>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">
                Update
            </button>
        </form>
    </div>
</x-layout-admin>