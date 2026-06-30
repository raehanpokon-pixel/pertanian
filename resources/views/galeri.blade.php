<x-layout-user>

    <!-- HERO -->
    <section class="bg-[#164d27] pt-32 pb-20 relative overflow-hidden text-center text-white">

        <div class="absolute inset-0 opacity-10">
            <img src="https://www.transparenttextures.com/patterns/natural-paper.png"
                 class="w-full h-full">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-black mb-4 uppercase tracking-tighter italic">
                Galeri Kegiatan
            </h2>
        </div>

    </section>

    <!-- GALERI -->
    <section class="py-24 bg-white">

        <div class="container mx-auto px-6">

            <!-- FILTER -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">

                <button
                    class="px-8 py-3 bg-green-600 text-white rounded-2xl text-xs font-black uppercase tracking-widest shadow-lg shadow-green-200">
                    Semua Galeri
                </button>

            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($galeris as $galeri)

                <!-- CARD -->
                <div
                    class="group relative overflow-hidden rounded-[40px] bg-slate-100 aspect-square cursor-pointer transition-all duration-500">

                    <!-- GAMBAR -->
                    <img
                        src="{{ asset('uploads/' . $galeri->foto) }}"
                        alt="{{ $galeri->judul }}"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:rotate-2">

                    <!-- OVERLAY -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#164d27]/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">

                        <p
                            class="text-yellow-400 text-[10px] font-black uppercase tracking-widest mb-2">
                            Galeri Kegiatan
                        </p>

                        <h5
                            class="text-white font-bold text-lg leading-tight">
                            {{ $galeri->judul }}
                        </h5>

                        @if($galeri->deskripsi)
                        <p class="text-white/80 text-sm mt-3 line-clamp-3">
                            {{ $galeri->deskripsi }}
                        </p>
                        @endif

                    </div>

                </div>

                @empty

                <!-- KOSONG -->
                <div class="col-span-3 text-center py-20">

                    <div
                        class="w-24 h-24 mx-auto rounded-full bg-slate-100 flex items-center justify-center mb-6">

                        <i class="fa-solid fa-image text-4xl text-slate-400"></i>

                    </div>

                    <h2 class="text-2xl font-black text-slate-500 mb-2">
                        Belum Ada Galeri
                    </h2>

                    <p class="text-slate-400">
                        Data galeri dari admin akan tampil di sini
                    </p>

                </div>

                @endforelse

            </div>

        </div>

    </section>

</x-layout-user>