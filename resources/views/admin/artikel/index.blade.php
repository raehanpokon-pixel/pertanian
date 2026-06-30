<x-layout-admin>
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-black text-slate-800 tracking-tighter uppercase italic">Kelola Artikel</h1>
            <p class="text-slate-500 mt-1">Daftar berita dan informasi untuk masyarakat.</p>
        </div>
        
        <a href="{{ route('admin.artikel.create') }}" class="bg-[#164d27] text-white px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest hover:shadow-xl hover:shadow-green-900/20 transition-all flex items-center gap-2">
            <i class="fa-solid fa-plus"></i> Tambah Artikel
        </a>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-2xl font-bold text-sm">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-[32px] border border-slate-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50/50">
                    <tr>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Gambar</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Judul Artikel</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest">Tanggal Post</th>
                        <th class="px-8 py-4 text-[10px] font-black uppercase text-slate-400 tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($artikels as $item)
                    <tr class="hover:bg-slate-50/80 transition-all">
                        <td class="px-8 py-4">
                            <div class="w-16 h-12 rounded-xl overflow-hidden border border-slate-100 shadow-sm">


                                <img src="{{ asset($item->gambar) }}" alt="Thumbnail" class="w-full h-full object-cover">
                            </div>
                        </td>
                        <td class="px-8 py-4">
                            <p class="font-bold text-slate-800 text-sm line-clamp-1">{{ $item->judul }}</p>
                            <p class="text-[11px] text-slate-400 italic">Oleh: Admin Dinas</p>
                        </td>
                        <td class="px-8 py-4 text-xs font-medium text-slate-500">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td class="px-8 py-4 text-right">
                            <div class="flex justify-end gap-2">
                               <a href="{{ route('admin.artikel.edit', $item->id) }}"
                                    class="p-2 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                                        <i class="fa-solid fa-pen-to-square text-xs"></i>
                                     </a>
                                <form action="{{ route('admin.artikel.destroy', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Hapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="p-2 bg-red-50 text-red-600 rounded-xl hover:bg-red-600 hover:text-white transition-all shadow-sm">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-20 text-center">
                            <div class="flex flex-col items-center">
                                <i class="fa-solid fa-newspaper text-5xl text-slate-100 mb-4"></i>
                                <p class="text-slate-400 font-bold text-sm uppercase tracking-widest">Belum ada artikel yang dibuat</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>