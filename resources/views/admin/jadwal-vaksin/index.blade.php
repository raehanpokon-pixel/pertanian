<x-layout-admin>

    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-black text-slate-800 tracking-tighter uppercase">
                Manajemen Jadwal Vaksin
            </h1>

            <p class="text-slate-500 mt-1">
                Kelola jadwal vaksin tanaman yang akan datang.
            </p>
        </div>

        <div class="flex items-center gap-3">

            <a href="{{ route('admin.jadwal-vaksin.create') }}"
               class="bg-[#164d27] text-white px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-xl hover:shadow-green-900/20 transition-all flex items-center gap-2">
                <i class="fa-solid fa-plus"></i>
                Tambah Jadwal
            </a>

        </div>
    </div>

    {{-- Alert Success --}}
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-2xl font-bold text-sm">
            {{ session('success') }}
        </div>
    @endif

    {{-- Table --}}
    <div class="bg-white rounded-[32px] border border-slate-100 shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full">

                {{-- Head --}}
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Nama Vaksin
                        </th>

                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Tanggal
                        </th>

                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Jam
                        </th>

                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Lokasi
                        </th>

                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Desa
                        </th>

                        <th class="px-8 py-4 text-left text-xs font-black uppercase">
                            Status
                        </th>

                        <th class="px-8 py-4 text-right text-xs font-black uppercase">
                            Aksi
                        </th>
                    </tr>
                </thead>

                {{-- Body --}}
                <tbody class="divide-y divide-slate-100">

                    @forelse($jadwals as $item)

                        <tr class="hover:bg-slate-50 transition-all">

                            <td class="px-8 py-4 font-bold text-slate-800">
                                {{ $item->nama_vaksin }}
                            </td>

                            <td class="px-8 py-4 text-slate-600">
                                {{ $item->tanggal }}
                            </td>

                            <td class="px-8 py-4 text-slate-600">
                                {{ $item->jam }}
                            </td>

                            <td class="px-8 py-4 text-slate-600">
                                {{ $item->lokasi }}
                            </td>

                            <td class="px-8 py-4 text-slate-600 font-medium">
                                {{ $item->desa }}
                            </td>

                            <td class="px-8 py-4">

                                <span class="px-3 py-1 rounded-full text-xs font-bold
                                    {{ $item->status == 'Akan Datang'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-slate-100 text-slate-600' }}">

                                    {{ $item->status }}

                                </span>

                            </td>

                            <td class="px-8 py-4 text-right">

                                <div class="flex justify-end gap-2">

                                    {{-- Tombol Edit --}}
                                    <a href="{{ route('admin.jadwal-vaksin.edit', $item->id) }}"
                                       class="p-2 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all shadow-sm">

                                        <i class="fa-solid fa-pen-to-square text-xs"></i>

                                    </a>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('admin.jadwal-vaksin.destroy', $item->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Hapus jadwal ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="p-2 bg-red-50 text-red-600 rounded-xl hover:bg-red-600 hover:text-white transition-all shadow-sm">

                                            <i class="fa-solid fa-trash text-xs"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7"
                                class="text-center py-16 text-slate-400 font-medium">

                                Belum ada jadwal vaksin.

                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layout-admin>