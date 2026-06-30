<x-layout-admin>

    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800 uppercase">
            Stok Bibit
        </h1>

        <p class="text-slate-500 mt-2">
            Kelola data stok bibit pertanian
        </p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">

        <div class="flex justify-between items-center mb-6">
            <h2 class="font-bold text-lg">
                Data Bibit
            </h2>

            <a href="{{ route('admin.stok-bibit.create') }}"
               class="bg-[#164d27] text-white px-5 py-3 rounded-xl font-bold hover:bg-green-800 transition-all">
                + Tambah Bibit
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">

                <thead>
                    <tr class="border-b border-slate-200 text-left">
                        <th class="py-3 font-bold">No</th>
                        <th class="py-3 font-bold">Gambar</th>
                        <th class="py-3 font-bold">Nama Bibit</th>
                        <th class="py-3 font-bold">Jenis</th>
                        <th class="py-3 font-bold">Stok</th>
                        <th class="py-3 font-bold">Status</th>
                        <th class="py-3 font-bold text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($bibits as $item)

                        <tr class="border-b border-slate-100 hover:bg-slate-50 transition-all">

                            <td class="py-4">
                                {{ $loop->iteration }}
                            </td>

                            {{-- Gambar --}}
                            <td class="py-4">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                         class="w-20 h-20 object-cover rounded-xl border border-slate-200">
                                @else
                                    <div class="w-20 h-20 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 text-xs">
                                        Tidak Ada
                                    </div>
                                @endif
                            </td>

                            {{-- Nama --}}
                            <td class="py-4 font-semibold">
                                {{ $item->nama_bibit }}
                            </td>

                            {{-- Jenis --}}
                            <td class="py-4">
                                {{ $item->jenis }}
                            </td>

                            {{-- Stok --}}
                            <td class="py-4 font-bold text-green-700">
                                {{ $item->stok }}
                            </td>

                            {{-- Status --}}
                            <td class="py-4">

                                @if ($item->status == 'Tersedia')
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
                                        {{ $item->status }}
                                    </span>

                                @elseif ($item->status == 'Menipis')
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold">
                                        {{ $item->status }}
                                    </span>

                                @else
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold">
                                        {{ $item->status }}
                                    </span>
                                @endif

                            </td>

                            {{-- Aksi --}}
                            <td class="py-4">
                                <div class="flex items-center justify-center gap-2">

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('admin.stok-bibit.edit', $item->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all">
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus (VERSI AMAN) --}}
                                    <form action="{{ route('admin.stok-bibit.destroy', ['id' => $item->id]) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all">
                                            Hapus
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="py-10 text-center text-slate-500">
                                Belum ada data bibit
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

    </div>

</x-layout-admin>