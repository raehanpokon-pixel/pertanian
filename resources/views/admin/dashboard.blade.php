<x-layout-admin>
    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-2xl md:text-3xl font-extrabold text-slate-800 tracking-tight uppercase">
                Ringkasan Statistik
            </h1>
            <p class="text-slate-500 text-sm mt-0.5">
                Data terbaru layanan Dinas Pertanian Gayo Lues hari ini.
            </p>
        </div>
        <div class="text-xs font-semibold text-slate-400 bg-slate-100 px-3 py-1.5 rounded-lg self-start md:self-auto flex items-center gap-2">
            <i class="fa-regular fa-clock"></i> Live Pemantauan
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-0.5 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center transition-colors group-hover:bg-emerald-600 group-hover:text-white">
                    <i class="fa-solid fa-paper-plane text-lg"></i>
                </div>
                <span class="flex items-center gap-1 text-[11px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">
                    <i class="fa-solid fa-arrow-trend-up text-[9px]"></i> +12%
                </span>
            </div>
            <p class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                Total Permohonan
            </p>
            <h3 class="text-3xl font-extrabold text-slate-800 mt-1 tracking-tight">
                2,543
            </h3>
        </div>
        
        </div>

    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between bg-slate-50/40">
            <div class="flex items-center gap-2.5">
                <div class="w-2 h-5 bg-[#0f3d1e] rounded-full"></div>
                <h3 class="font-bold text-slate-800 tracking-tight uppercase text-sm">
                    Permohonan Masuk Terbaru
                </h3>
            </div>
            <span class="text-xs bg-amber-50 text-amber-700 font-bold px-2.5 py-1 rounded-lg border border-amber-100">
                1 Perlu Ditinjau
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50/70 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-3.5 text-[11px] font-bold uppercase tracking-wider text-slate-400 w-[50%]">
                            Pemohon
                        </th>
                        <th class="px-6 py-3.5 text-[11px] font-bold uppercase tracking-wider text-slate-400 w-[35%]">
                            Layanan
                        </th>
                        <th class="px-6 py-3.5 text-[11px] font-bold uppercase tracking-wider text-slate-400 text-right w-[15%]">
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100">
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        <td class="px-6 py-4 font-semibold text-slate-800">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-slate-100 text-slate-600 flex items-center justify-center text-xs font-bold border border-slate-200/50 uppercase">
                                    ZG
                                </div>
                                <div>
                                    <span class="block text-slate-800 font-bold text-sm group-hover:text-emerald-700 transition-colors">Zulkifli Gayo</span>
                                    <span class="text-[11px] text-slate-400 font-normal block mt-0.5">Baru saja mendaftar</span>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 vertical-align-middle">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-700 rounded-lg text-[10px] font-extrabold tracking-wide border border-emerald-200/40">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                BIBIT PADI
                            </span>
                        </td>

                        <td class="px-6 py-4 text-right">
                            <button class="w-8 h-8 rounded-xl text-slate-400 bg-slate-50 hover:bg-emerald-50 hover:text-emerald-600 border border-slate-200/40 flex items-center justify-center ml-auto transition-all duration-200 shadow-sm" title="Lihat Detail">
                                <i class="fa-solid fa-arrow-right text-xs transition-transform group-hover:translate-x-0.5"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout-admin>