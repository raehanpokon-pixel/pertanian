<x-layout-user>
    <section class="bg-[#164d27] pt-40 pb-24 relative overflow-hidden text-center text-white">
        
        <div class="absolute top-10 left-6 md:left-12 z-50">
            <a href="/layanan/index"
               class="w-12 h-12 flex items-center justify-center rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-green-600 hover:border-green-600 transition-all duration-300 shadow-lg group">
                <i class="fa-solid fa-arrow-left text-xl group-hover:-translate-x-1 transition-transform"></i>
            </a>
        </div>

        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <img src="https://www.transparenttextures.com/patterns/natural-paper.png"
                 class="w-full h-full object-cover">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-6xl font-black mb-4 uppercase tracking-tighter italic">
                Katalog Bibit Unggul
            </h2>

            <div class="flex justify-center items-center gap-2 text-green-300 text-[10px] md:text-xs font-bold uppercase tracking-[0.2em]">
                <a href="/layanan" class="hover:text-white transition">
                    Layanan Publik
                </a>
                <i class="fa-solid fa-chevron-right text-[8px] opacity-50"></i>
                <span class="text-white">
                    SOP & Katalog Bibit
                </span>
            </div>
        </div>
    </section>


    <section class="py-20 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6">

            {{-- FILTER --}}
            <div class="mb-16 flex flex-wrap gap-3 justify-center">
                <button onclick="filterBibit('semua', this)"
                    class="bibit-filter-btn active px-8 py-3 bg-green-600 text-white rounded-full text-xs font-black uppercase tracking-widest shadow-xl shadow-green-900/20 transition-all">
                    Semua
                </button>

                <button onclick="filterBibit('bawang merah', this)"
                    class="bibit-filter-btn px-8 py-3 bg-white text-slate-500 rounded-full text-xs font-black uppercase tracking-widest border border-slate-200 hover:border-green-500 hover:text-green-600 transition-all">
                    Bawang Merah
                </button>

                <button onclick="filterBibit('durian', this)"
                    class="bibit-filter-btn px-8 py-3 bg-white text-slate-500 rounded-full text-xs font-black uppercase tracking-widest border border-slate-200 hover:border-green-500 hover:text-green-600 transition-all">
                    Durian
                </button>

                <button onclick="filterBibit('kopi', this)"
                    class="bibit-filter-btn px-8 py-3 bg-white text-slate-500 rounded-full text-xs font-black uppercase tracking-widest border border-slate-200 hover:border-green-500 hover:text-green-600 transition-all">
                    Kopi
                </button>

                <button onclick="filterBibit('hortikultura', this)"
                    class="bibit-filter-btn px-8 py-3 bg-white text-slate-500 rounded-full text-xs font-black uppercase tracking-widest border border-slate-200 hover:border-green-500 hover:text-green-600 transition-all">
                    Hortikultura
                </button>
            </div>


            {{-- KATALOG --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8" id="bibit-wrapper">

                @foreach ($bibits as $item)

                    <div class="bibit-item group bg-white rounded-[40px] p-5 border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500"
    data-category="{{ strtolower(str_replace('Bibit ', '', trim($item->nama_bibit))) }}">

    {{-- Gambar --}}
    <div class="aspect-[4/5] rounded-[30px] overflow-hidden mb-4 relative">
        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : '/image/default.jpg' }}"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

        {{-- Badge Jenis --}}
        <div class="absolute top-4 left-4">
            <span
                class="bg-green-600 text-white text-[9px] font-black px-3 py-1.5 rounded-xl uppercase tracking-widest shadow-lg">
                {{ $item->jenis }}
            </span>
        </div>
    </div>

    {{-- Status --}}
    <div class="mb-4 px-1 flex justify-start">
        <span
            class="
                text-white text-[10px] font-black px-4 py-2 rounded-xl uppercase tracking-widest shadow-md
                {{ strtolower($item->status) == 'tersedia'
                    ? 'bg-green-500'
                    : 'bg-red-500' }}
            ">
            {{ $item->status }}
        </span>
    </div>

    {{-- Nama --}}
    <div class="flex justify-between items-center px-2">
        <h4 class="text-xl font-bold text-slate-900 uppercase tracking-tighter">
            {{ $item->nama_bibit }}
        </h4>

        <button onclick="openDetail(
            '{{ $item->nama_bibit }}',
            '{{ $item->deskripsi }}',
            '{{ $item->gambar ? asset('storage/' . $item->gambar) : '/image/default.jpg' }}'
        )"
        class="w-10 h-10 rounded-full bg-slate-50 text-slate-400 flex items-center justify-center hover:bg-green-600 hover:text-white transition-all">
            <i class="fa-solid fa-arrow-right -rotate-45"></i>
        </button>
    </div>

</div>  
                @endforeach

            </div>
        </div>
    </section>


    {{-- MODAL --}}
    <div id="modalDetail" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closeDetail()"></div>

        <div id="modalContent"
            class="bg-white rounded-[40px] w-full max-w-lg relative z-10 overflow-hidden shadow-2xl transform transition-all scale-95 opacity-0 duration-300">

            <button onclick="closeDetail()"
                class="absolute top-6 right-6 w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-red-500 hover:text-white transition-all z-20">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="p-8">
                <div class="h-48 w-full rounded-[30px] overflow-hidden mb-6">
                    <img id="modalImg" src="" class="w-full h-full object-cover">
                </div>

                <h3 id="modalTitle"
                    class="text-3xl font-black text-slate-900 uppercase tracking-tighter mb-4 italic">
                </h3>

                <div class="w-12 h-1.5 bg-green-500 rounded-full mb-6"></div>

                <p id="modalDesc"
                    class="text-slate-600 leading-relaxed text-sm md:text-base font-medium">
                </p>

                <button onclick="closeDetail()"
                    class="mt-8 w-full py-4 bg-slate-900 text-white rounded-2xl font-bold uppercase text-[10px] tracking-[0.2em] hover:bg-green-600 transition-all shadow-lg">
                    Tutup Keterangan
                </button>
            </div>
        </div>
    </div>
    <section class="pb-24 bg-slate-50">
    <div class="container mx-auto px-6">

        <div class="max-w-5xl mx-auto bg-white rounded-[40px] p-10 shadow-xl border border-slate-100">

            <div class="flex items-center gap-4 mb-10">
                <div class="w-16 h-16 rounded-3xl bg-green-100 text-green-600 flex items-center justify-center text-3xl">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>

                <div>
                    <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter italic">
                        Persyaratan Pengajuan Bibit
                    </h3>

                    <p class="text-slate-500 text-sm mt-2">
                        Lengkapi dokumen berikut sebelum melakukan pengajuan bantuan bibit unggul.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <div class="bg-slate-50 rounded-[30px] p-6 border border-slate-100 hover:shadow-lg transition-all">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-id-card"></i>
                        </div>

                        <div>
                            <h4 class="font-black text-slate-900 uppercase text-sm mb-2">
                                Fotokopi KTP
                            </h4>

                            <p class="text-sm text-slate-500 leading-relaxed">
                                KTP ketua kelompok tani atau pemohon yang masih aktif dan berlaku.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-[30px] p-6 border border-slate-100 hover:shadow-lg transition-all">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div>
                            <h4 class="font-black text-slate-900 uppercase text-sm mb-2">
                                Kelompok Tani Aktif
                            </h4>

                            <p class="text-sm text-slate-500 leading-relaxed">
                                Terdaftar resmi dalam kelompok tani atau Gapoktan aktif.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-[30px] p-6 border border-slate-100 hover:shadow-lg transition-all">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>

                        <div>
                            <h4 class="font-black text-slate-900 uppercase text-sm mb-2">
                                Data Lahan
                            </h4>

                            <p class="text-sm text-slate-500 leading-relaxed">
                                Menyertakan lokasi dan luas lahan yang akan digunakan untuk penanaman.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-50 rounded-[30px] p-6 border border-slate-100 hover:shadow-lg transition-all">
                    <div class="flex gap-4 items-start">
                        <div class="w-12 h-12 rounded-2xl bg-green-600 text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-file-signature"></i>
                        </div>

                        <div>
                            <h4 class="font-black text-slate-900 uppercase text-sm mb-2">
                                Surat Permohonan
                            </h4>

                            <p class="text-sm text-slate-500 leading-relaxed">
                                Surat pengajuan bantuan bibit yang ditandatangani ketua kelompok tani.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-10 bg-gradient-to-r from-green-600 to-green-700 rounded-[30px] p-8 text-white">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                    <div>
                        <h4 class="text-2xl font-black uppercase tracking-tighter mb-2">
                            Pengajuan Bantuan Bibit
                        </h4>

                        <p class="text-green-100 text-sm leading-relaxed">
                            Setelah seluruh persyaratan lengkap, silakan ajukan permohonan melalui kantor dinas atau layanan online.
                        </p>
                    </div>

                    <a href="/layanan/index"
                       class="inline-flex items-center justify-center px-8 py-4 bg-white text-green-700 rounded-2xl font-black uppercase text-xs tracking-widest hover:bg-yellow-300 transition-all shadow-xl">
                        Ajukan Sekarang
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>


    <script>
        function filterBibit(category, btn) {
            const items = document.querySelectorAll('.bibit-item');
            const buttons = document.querySelectorAll('.bibit-filter-btn');
            const wrapper = document.getElementById('bibit-wrapper');

            buttons.forEach(b => {
                b.classList.remove(
                    'bg-green-600',
                    'text-white',
                    'active',
                    'shadow-xl',
                    'shadow-green-900/20'
                );

                b.classList.add(
                    'bg-white',
                    'text-slate-500'
                );
            });

            btn.classList.add(
                'bg-green-600',
                'text-white',
                'active',
                'shadow-xl',
                'shadow-green-900/20'
            );

            btn.classList.remove(
                'bg-white',
                'text-slate-500'
            );

            wrapper.style.opacity = '0';
            wrapper.style.transform = 'translateY(10px)';

            setTimeout(() => {
                items.forEach(item => {
                    const itemCat = item.getAttribute('data-category');

                    if (category === 'semua' || itemCat === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                wrapper.style.opacity = '1';
                wrapper.style.transform = 'translateY(0)';
            }, 300);
        }

        function openDetail(title, desc, img) {
            const modal = document.getElementById('modalDetail');
            const content = document.getElementById('modalContent');

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = desc;
            document.getElementById('modalImg').src = img;

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeDetail() {
            const modal = document.getElementById('modalDetail');
            const content = document.getElementById('modalContent');

            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }
    </script>

    <style>
        #bibit-wrapper {
            transition: all 0.4s ease-in-out;
        }

        .bibit-item {
            animation: fadeInScale 0.5s ease-out forwards;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>

</x-layout-user>