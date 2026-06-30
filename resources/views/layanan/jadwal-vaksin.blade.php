<x-layout-user>
    <section class="flex items-center pt-40 pb-24 relative overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-red-900/40 via-slate-900/80 to-[#164d27] z-10"></div>
            <img src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?auto=format&fit=crop&q=80" 
                 class="w-full h-full object-cover opacity-30 grayscale">
        </div>

        <div class="absolute top-10 left-10 z-30">
            <a href="/layanan/index" 
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 border border-white/20 text-white hover:bg-red-600 hover:border-red-500 transition-all group shadow-2xl backdrop-blur-md">
                <i class="fa-solid fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
            </a>
        </div>

        <div class="container mx-auto px-6 relative z-20">
            <div class="text-center">
                <h1 class="text-5xl md:text-8xl font-black text-white mb-4 tracking-tighter italic uppercase drop-shadow-2xl">
                    Jadwal <span class="text-red-500">Vaksinasi</span>
                </h1>
                <div class="flex items-center justify-center gap-3 text-[10px] font-black uppercase tracking-[0.4em] text-white/60">
                    <span class="hover:text-red-400 transition-colors">Layanan Publik</span>
                    <i class="fa-solid fa-chevron-right text-[8px] text-red-500"></i>
                    <span class="text-white">Jadwal & Prosedur</span>
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 -mt-12 relative z-30 pb-24">
        <div class="grid lg:grid-cols-4 gap-8">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-8 rounded-[40px] shadow-2xl shadow-slate-900/10 border border-slate-100">
                    <div class="w-14 h-14 bg-red-50 text-red-600 rounded-2xl flex items-center justify-center mb-6 text-2xl shadow-inner">
                        <i class="fa-solid fa-notes-medical"></i>
                    </div>
                    <h4 class="font-black text-slate-900 uppercase text-xs tracking-widest mb-6">Persyaratan Umum</h4>
                    <ul class="space-y-5">
                        <li class="flex gap-4 items-start">
                            <span class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5"><i class="fa-solid fa-check"></i></span>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Hewan dalam kondisi sehat & tidak sedang demam.</p>
                        </li>
                        <li class="flex gap-4 items-start">
                            <span class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5"><i class="fa-solid fa-check"></i></span>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Usia minimal hewan adalah 3 bulan.</p>
                        </li>
                        <li class="flex gap-4 items-start">
                            <span class="w-5 h-5 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5"><i class="fa-solid fa-check"></i></span>
                            <p class="text-xs font-medium text-slate-500 leading-relaxed">Membawa identitas (KTP) pemilik hewan.</p>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-red-600 to-red-800 p-8 rounded-[40px] text-white shadow-xl shadow-red-900/20 relative overflow-hidden group">
                    <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-all"></div>
                    <h4 class="text-xl font-black mb-2">Lapor Wabah?</h4>
                    <p class="text-[11px] text-red-100/80 mb-6 leading-relaxed">Segera hubungi tim medis jika terdapat gejala penyakit menular di desa Anda.</p>
                    <a href="#" class="block w-full text-center bg-white text-red-700 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-slate-900 hover:text-white transition-all shadow-lg">Chat Medik Vet</a>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="bg-white rounded-[40px] shadow-2xl shadow-slate-900/5 border border-slate-100 overflow-hidden">
                    <div class="p-10 border-b border-slate-50 flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div>
                            <h2 class="text-3xl font-black text-slate-900 tracking-tighter">Agenda Vaksinasi 2026</h2>
                            <p class="text-slate-400 text-sm mt-1 font-medium">Jadwal resmi Dinas Pertanian Kabupaten Gayo Lues</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest mr-2">Navigasi Bulan</span>
                            <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-red-50 hover:text-red-600 transition-all flex items-center justify-center shadow-sm">
                                <i class="fa-solid fa-chevron-left text-xs"></i>
                            </button>
                            <button class="w-12 h-12 rounded-2xl bg-slate-50 text-slate-400 hover:bg-red-50 hover:text-red-600 transition-all flex items-center justify-center shadow-sm">
                                <i class="fa-solid fa-chevron-right text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="bg-slate-50/50">
                                    <th class="px-10 py-6 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Waktu</th>
                                    <th class="px-10 py-6 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Lokasi Pelaksanaan</th>
                                    <th class="px-10 py-6 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Sasaran Vaksin</th>
                                    <th class="px-10 py-6 text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @forelse($jadwals as $jadwal)
                                <tr class="hover:bg-red-50/30 transition-colors group">

                                    <td class="px-10 py-8">
                                        <span class="block font-black text-slate-900 text-xl tracking-tighter">
                                            {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('d M') }}
                                        </span>

                                        <span class="text-[10px] text-red-500 font-black uppercase tracking-widest">
                                            {{ \Carbon\Carbon::parse($jadwal->tanggal)->translatedFormat('l') }}
                                        </span>

                                        <div class="text-xs text-slate-400 mt-1">
                                            {{ $jadwal->jam }}
                                        </div>
                                    </td>

                                    <td class="px-10 py-8">
                                        <span class="block font-bold text-slate-800 text-base mb-1">
                                            {{ $jadwal->lokasi }}
                                        </span>

                                        <span class="text-xs text-slate-500 font-medium tracking-tight">
                                            Desa {{ $jadwal->desa }}
                                        </span>
                                    </td>

                                    <td class="px-10 py-8">
                                        <span class="text-[10px] font-black text-blue-600 uppercase">
                                            {{ $jadwal->nama_vaksin }}
                                        </span>
                                    </td>
                                <td class="px-10 py-8">
                                    @php
                                        $waktuJadwal = \Carbon\Carbon::parse($jadwal->tanggal . ' ' . $jadwal->jam);
                                        $batasSelesai = $waktuJadwal->copy()->addHours(8);
                                    @endphp

                                    @if(now()->greaterThanOrEqualTo($batasSelesai))
                                        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-gray-100 text-gray-600 text-[10px] font-black uppercase tracking-widest">
                                            <span class="w-1.5 h-1.5 bg-gray-500 rounded-full"></span>
                                            Selesai
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-widest">
                                            <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                                            Akan Datang
                                        </span>
                                    @endif
                                </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-8 text-slate-500">
                                        Belum ada jadwal vaksin
                                    </td>
                                </tr>
                                @endforelse
                                </tbody>
                                                        </table>
                    </div>

                    <div class="p-10 bg-slate-50/50 border-t border-slate-50">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                            <p class="text-[11px] text-slate-400 font-bold uppercase tracking-widest italic text-center md:text-left">
                                * Layanan ini gratis dan tidak dipungut biaya apapun bagi seluruh masyarakat.
                            </p>
                           <a href="{{ route('layanan.jadwal-vaksin.pdf') }}"
                                class="bg-slate-900 text-white px-8 py-4 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-red-600 transition-all shadow-xl shadow-slate-900/20 active:scale-95 inline-block">
                                    Download Kalender Vaksin (PDF)
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-user>