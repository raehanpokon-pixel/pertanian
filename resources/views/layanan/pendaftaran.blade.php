<x-layout-user>
    <section class="bg-[#164d27] pt-40 pb-24 relative overflow-hidden text-center text-white">
        
        <div class="absolute top-10 left-6 md:left-12 z-50">
            <a href="/layanan/index" 
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-blue-600 hover:border-blue-600 transition-all duration-300 shadow-lg group">
                <i class="fa-solid fa-arrow-left text-xl group-hover:-translate-x-1 transition-transform"></i>
            </a>
        </div>

        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <img src="https://www.transparenttextures.com/patterns/natural-paper.png" class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-6xl font-black mb-4 uppercase tracking-tighter italic">
                Pendaftaran Kartu Tani
            </h2>
            <div class="flex justify-center items-center gap-2 text-blue-300 text-[10px] md:text-xs font-bold uppercase tracking-[0.2em]">
                <a href="/layanan" class="hover:text-white transition">Layanan Publik</a>
                <i class="fa-solid fa-chevron-right text-[8px] opacity-50"></i>
                <span class="text-white">Informasi & Prosedur</span>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6">
            
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="lg:col-span-1 space-y-6">
                    <div class="bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6">
                            <i class="fa-solid fa-id-card"></i>
                        </div>
                        <h4 class="text-xl font-black text-slate-900 uppercase tracking-tighter mb-4">Apa itu Kartu Tani?</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Kartu identitas khusus bagi petani yang terintegrasi dengan perbankan untuk menyalurkan bantuan pemerintah secara tepat sasaran.
                        </p>
                    </div>

                    <div class="bg-[#164d27] p-8 rounded-[40px] text-white shadow-xl relative overflow-hidden">
                        <i class="fa-solid fa-circle-check absolute -bottom-10 -right-10 text-[150px] opacity-10"></i>
                        <h4 class="text-xl font-black uppercase tracking-tighter mb-6">Manfaat Utama</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3 text-xs font-medium text-green-100">
                                <i class="fa-solid fa-check mt-1"></i>
                                Akses Pupuk Bersubsidi
                            </li>
                            <li class="flex items-start gap-3 text-xs font-medium text-green-100">
                                <i class="fa-solid fa-check mt-1"></i>
                                Bantuan Bibit & Peralatan
                            </li>
                            <li class="flex items-start gap-3 text-xs font-medium text-green-100">
                                <i class="fa-solid fa-check mt-1"></i>
                                Kemudahan Kredit Usaha Rakyat (KUR)
                            </li>
                            <li class="flex items-start gap-3 text-xs font-medium text-green-100">
                                <i class="fa-solid fa-check mt-1"></i>
                                Basis Data Transaksi Petani
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="bg-white p-10 md:p-14 rounded-[50px] shadow-2xl border border-slate-100">
                        <h3 class="text-2xl font-black text-slate-900 mb-10 flex items-center gap-4 uppercase tracking-tighter italic">
                            <span class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                                <i class="fa-solid fa-list-check"></i>
                            </span>
                            Langkah Pendaftaran
                        </h3>

                        <div class="space-y-12 relative">
                            <div class="absolute left-6 top-4 bottom-4 w-0.5 bg-slate-100"></div>

                            <div class="relative flex gap-8 items-start group">
                                <div class="w-12 h-12 rounded-2xl bg-white border-2 border-slate-100 flex items-center justify-center font-black text-slate-400 group-hover:border-blue-600 group-hover:text-blue-600 transition-all z-10 shrink-0 shadow-sm">1</div>
                                <div>
                                    <h5 class="font-black text-slate-900 uppercase text-sm tracking-widest mb-2">Penyusunan e-RDKK</h5>
                                    <p class="text-slate-500 text-sm leading-relaxed">
                                        Petani mengumpulkan berkas (Fotocopy KTP & KK) ke Pengurus Kelompok Tani untuk didaftarkan dalam sistem e-RDKK Pupuk Bersubsidi.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex gap-8 items-start group">
                                <div class="w-12 h-12 rounded-2xl bg-white border-2 border-slate-100 flex items-center justify-center font-black text-slate-400 group-hover:border-blue-600 group-hover:text-blue-600 transition-all z-10 shrink-0 shadow-sm">2</div>
                                <div>
                                    <h5 class="font-black text-slate-900 uppercase text-sm tracking-widest mb-2">Verifikasi & Validasi</h5>
                                    <p class="text-slate-500 text-sm leading-relaxed">
                                        Petugas admin dinas dan PPL melakukan verifikasi data di lapangan untuk memastikan keaslian kepemilikan lahan dan status petani.
                                    </p>
                                </div>
                            </div>

                            <div class="relative flex gap-8 items-start group">
                                <div class="w-12 h-12 rounded-2xl bg-white border-2 border-slate-100 flex items-center justify-center font-black text-slate-400 group-hover:border-blue-600 group-hover:text-blue-600 transition-all z-10 shrink-0 shadow-sm">3</div>
                                <div>
                                    <h5 class="font-black text-slate-900 uppercase text-sm tracking-widest mb-2">Penerbitan & Distribusi</h5>
                                    <p class="text-slate-500 text-sm leading-relaxed">
                                        Kartu diterbitkan oleh Bank mitra pemerintah. Petani dapat mengambil Kartu Tani di kantor bank atau titik distribusi yang ditentukan oleh Dinas Pertanian.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-16 pt-10 border-t border-slate-50 flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="text-slate-400 text-[10px] font-bold uppercase tracking-widest max-w-[200px]">
                                Pastikan data e-RDKK Anda sudah terupdate tahun ini.
                            </div>
                            <a href="https://wa.me/628123456789" class="px-8 py-4 bg-blue-600 text-white rounded-2xl font-black uppercase text-xs tracking-[0.2em] shadow-xl shadow-blue-900/20 hover:-translate-y-1 transition-all">
                                Hubungi Admin Kartu Tani
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layout-user>