<x-layout-user>
    <section class="bg-[#164d27] pt-40 pb-24 relative overflow-hidden text-center text-white">

        <div class="absolute top-10 left-6 md:left-12 z-50">
            <a href="/layanan/index"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-orange-500 hover:border-orange-500 transition-all duration-300 shadow-lg group">
                <i class="fa-solid fa-arrow-left text-xl group-hover:-translate-x-1 transition-transform"></i>
            </a>
        </div>

        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <img src="https://www.transparenttextures.com/patterns/natural-paper.png"
                 class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-6xl font-black mb-4 uppercase tracking-tighter italic">
                Sewa Alat & Mesin
            </h2>

                <span class="text-white">
                    Daftar Alat Pertanian
                </span>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                @forelse($alat as $item)

                    <div class="group bg-white rounded-[40px] p-6 border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500">

                        <div class="aspect-video rounded-[30px] overflow-hidden mb-6 relative">

                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <img src="https://via.placeholder.com/500x300"
                                     class="w-full h-full object-cover">
                            @endif

                            <div class="absolute top-4 right-4">

                                @if($item->status == 'Tersedia')
                                    <span class="bg-green-600 text-white text-[10px] font-black px-4 py-2 rounded-xl uppercase shadow-lg">
                                        Tersedia
                                    </span>
                                @else
                                    <span class="bg-red-500 text-white text-[10px] font-black px-4 py-2 rounded-xl uppercase shadow-lg">
                                        {{ $item->status }}
                                    </span>
                                @endif

                            </div>
                        </div>

                        <h4 class="text-2xl font-bold text-slate-900 uppercase tracking-tighter">
                            {{ $item->nama_alat }}
                        </h4>

                        <p class="text-slate-500 text-sm mt-3 leading-relaxed">
                            {{ $item->deskripsi }}
                        </p>

                        <div class="mt-6 pt-6 border-t border-slate-50 flex justify-between items-center">

                            <div class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">
                                Tarif PNBP
                            </div>

                            <div class="font-black text-slate-900 italic">
                                Rp {{ number_format($item->harga_per_hari, 0, ',', '.') }}

                                <span class="text-[10px] text-slate-400">
                                    /Hari
                                </span>
                            </div>
                        </div>

                    </div>

                @empty

                    <div class="col-span-3 text-center py-20">
                        <h3 class="text-2xl font-bold text-slate-700">
                            Belum ada alat tersedia
                        </h3>
                    </div>

                @endforelse

            </div>

            <div class="mt-24 max-w-4xl mx-auto bg-white p-10 rounded-[40px] shadow-xl border border-slate-100">

                <h3 class="text-xl font-black text-slate-900 mb-8 uppercase italic tracking-tighter">
                    Prosedur Peminjaman Alat
                </h3>

                <div class="space-y-6">

                    <div class="flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-black shrink-0">
                            1
                        </div>

                        <p class="text-slate-500 text-sm italic">
                            Cek ketersediaan alat melalui katalog di atas atau hubungi operator UPJA.
                        </p>
                    </div>

                    <div class="flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-black shrink-0">
                            2
                        </div>

                        <p class="text-slate-500 text-sm italic">
                            Isi formulir peminjaman dan lakukan pembayaran biaya retribusi sesuai tarif PNBP.
                        </p>
                    </div>

                    <div class="flex gap-6">
                        <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-black shrink-0">
                            3
                        </div>

                        <p class="text-slate-500 text-sm italic">
                            Alat akan dikirim ke lokasi lahan atau diambil sesuai kesepakatan jadwal.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>
</x-layout-user>