<x-layout-admin>
    <div class="space-y-8">

        <!-- Top Header & Action Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-slate-800 tracking-tight uppercase">
                    Manajemen Layanan
                </h1>
                <p class="text-sm text-slate-500 mt-0.5">
                    Kelola data jadwal vaksin dan bantuan bibit unggul.
                </p>
            </div>

            <a href="{{ route('admin.galeri.create') }}"
               class="inline-flex items-center justify-center gap-2 bg-[#0f3d1e] text-white px-5 py-3 rounded-xl text-xs font-bold uppercase tracking-wider hover:bg-slate-950 transition-all duration-200 shadow-md shadow-green-950/10 hover:-translate-y-0.5">
                <i class="fa-solid fa-plus text-[10px]"></i> Tambah Layanan Baru
            </a>
        </div>

        <!-- Main Data Container -->
        <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-100">
                            <th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 w-[45%]">
                                Nama Layanan / Konten
                            </th>
                            <th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 w-[20%]">
                                Kategori
                            </th>
                            <th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 w-[15%]">
                                Status
                            </th>
                            <th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-slate-400 text-right w-[20%]">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                        @forelse($galeris as $galeri)
                            <tr class="hover:bg-slate-50/60 transition-colors group">
                                
                                {{-- Judul + Foto Premium Custom Layout --}}
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <div class="relative w-14 h-14 rounded-xl overflow-hidden border border-slate-200/60 flex-shrink-0 bg-slate-50">
                                            <img src="{{ asset('uploads/' . $galeri->foto) }}"
                                                 alt="{{ $galeri->judul }}"
                                                 class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                                        </div>
                                        <div class="min-w-0">
                                            <span class="text-sm font-bold text-slate-800 block truncate group-hover:text-emerald-800 transition-colors">
                                                {{ $galeri->judul }}
                                            </span>
                                            <span class="inline-block text-[10px] text-slate-400 bg-slate-100 font-semibold px-1.5 py-0.5 rounded mt-1">
                                                ID: #{{ $galeri->id }}
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                {{-- Kategori Badge style modern --}}
                                <td class="px-6 py-4 vertical-align-middle">
                                    <span class="inline-flex items-center px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md text-[10px] font-bold uppercase tracking-wide border border-slate-200/40">
                                        Galeri
                                    </span>
                                </td>

                                {{-- Status Indicator micro dot --}}
                                <td class="px-6 py-4 vertical-align-middle">
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-50 border border-emerald-100">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                        <span class="text-[11px] font-bold text-emerald-700">Aktif</span>
                                    </div>
                                </td>

                                {{-- Aksi (EDIT + HAPUS Layout Compact) --}}
                                <td class="px-6 py-4 text-right vertical-align-middle">
                                    <div class="flex items-center justify-end gap-1.5">
                                        
                                        {{-- Tombol Edit Berbasis Ikon --}}
                                        <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                           class="w-8 h-8 rounded-lg text-blue-600 bg-blue-50 border border-blue-100/50 flex items-center justify-center transition-all hover:bg-blue-600 hover:text-white"
                                           title="Edit Data">
                                            <i class="fa-solid fa-pen-to-square text-xs"></i>
                                        </a>

                                        {{-- Form & Tombol Hapus Berbasis Ikon --}}
                                        <form action="{{ route('admin.galeri.destroy', $galeri->id) }}"
                                              method="POST"
                                              class="inline"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="w-8 h-8 rounded-lg text-rose-600 bg-rose-50 border border-rose-100/50 flex items-center justify-center transition-all hover:bg-rose-600 hover:text-white"
                                                    title="Hapus Data">
                                                <i class="fa-solid fa-trash text-xs"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            {{-- State Empty Dashboard Layout --}}
                            <tr>
                                <td colspan="4" class="text-center py-12 bg-slate-50/20">
                                    <div class="flex flex-col items-center justify-center max-w-sm mx-auto">
                                        <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 mb-3 border border-slate-200/40">
                                            <i class="fa-regular fa-folder-open text-base"></i>
                                        </div>
                                        <h3 class="text-sm font-bold text-slate-700">Belum Ada Data</h3>
                                        <p class="text-xs text-slate-400 text-center mt-1">
                                            Data manajemen layanan masih kosong atau belum ditambahkan oleh operator.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layout-admin>