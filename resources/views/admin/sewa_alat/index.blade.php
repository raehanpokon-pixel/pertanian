<x-layout-admin>

<div class="mb-8 flex justify-between items-center">
    <h1 class="text-3xl font-bold text-slate-800">
        Data Sewa Alat
    </h1>

    <a href="{{ route('admin.sewa_alat.create') }}"
       class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg font-semibold transition">
        + Tambah Alat
    </a>
</div>

<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <table class="w-full text-left">

        <thead class="bg-slate-100 text-slate-700">
            <tr>
                <th class="p-4">Foto</th>
                <th class="p-4">Nama Alat</th>
                <th class="p-4">Deskripsi</th>
                <th class="p-4">Harga / Hari</th>
                <th class="p-4">Status</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($alat as $item)
            <tr class="border-b hover:bg-slate-50">

                <td class="p-4">
                    <img src="{{ asset('storage/'.$item->foto) }}"
                         class="w-24 h-20 object-cover rounded-lg border">
                </td>

                <td class="p-4 font-semibold">
                    {{ $item->nama_alat }}
                </td>

                <td class="p-4 text-slate-600">
                    {{ $item->deskripsi }}
                </td>

                <td class="p-4">
                    Rp {{ number_format($item->harga_per_hari,0,',','.') }}
                </td>

                <td class="p-4">
                    @if($item->status == 'Tersedia')
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                            Tersedia
                        </span>
                    @else
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                            Dipesan
                        </span>
                    @endif
                </td>

                {{-- AKSI --}}
                <td class="p-4 text-center">
                    <div class="flex justify-center gap-2">

                        <a href="{{ route('admin.sewa_alat.edit', $item->id) }}"
                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('admin.sewa_alat.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus?')">

                            @csrf
                            @method('DELETE')

                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>

                        </form>

                    </div>
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center p-8 text-slate-500">
                    Belum ada data sewa alat.
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

</x-layout-admin>