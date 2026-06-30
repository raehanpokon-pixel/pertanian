<x-layout-user>
    <section class="bg-[#164d27] pt-32 pb-20 relative overflow-hidden text-center text-white">
        <div class="absolute inset-0 opacity-10">
            <img src="https://www.transparenttextures.com/patterns/natural-paper.png" class="w-full h-full">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl md:text-5xl font-black mb-4 uppercase tracking-tighter italic">
                Warta Pertanian
            </h2>

            <div class="flex justify-center items-center gap-2 text-green-300 text-sm font-bold uppercase tracking-widest">
                <a href="/" class="hover:text-white transition">Beranda</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-white">Artikel & Berita</span>
            </div>
        </div>
    </section>


    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">

            {{-- Filter --}}
            <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900">
                        Kumpulan Artikel Terkini
                    </h3>
                    <p class="text-slate-500 text-sm">
                        Informasi terbaru seputar teknologi dan edukasi tani.
                    </p>
                </div>

                <div class="flex gap-2">
                    <button onclick="filterArticles('semua', this)"
                        class="filter-btn bg-green-600 text-white px-5 py-2 rounded-full text-xs font-bold uppercase transition-all">
                        Semua
                    </button>

                    <button onclick="filterArticles('edukasi', this)"
                        class="filter-btn bg-white text-slate-500 px-5 py-2 rounded-full text-xs font-bold uppercase border border-slate-200 hover:bg-green-50 transition-all">
                        Edukasi
                    </button>

                    <button onclick="filterArticles('kegiatan', this)"
                        class="filter-btn bg-white text-slate-500 px-5 py-2 rounded-full text-xs font-bold uppercase border border-slate-200 hover:bg-green-50 transition-all">
                        Kegiatan
                    </button>
                </div>
            </div>


            {{-- Artikel --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="articles-wrapper">

                @forelse($artikels as $item)

                    <article
                        class="article-item bg-white rounded-[32px] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 group border border-slate-100 flex flex-col h-full"
                        data-category="{{ strtolower($item->kategori) }}">

                        {{-- Gambar --}}
                        <div class="relative overflow-hidden aspect-video">
                            <img src="{{ asset($item->gambar) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">

                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-green-600 text-white text-[9px] font-black px-3 py-1 rounded-lg uppercase tracking-wider shadow-lg">
                                    {{ $item->kategori }}
                                </span>
                            </div>
                        </div>


                        {{-- Isi --}}
                        <div class="p-6 flex flex-col flex-grow">

                            <div
                                class="flex items-center gap-2 text-slate-400 text-[9px] font-bold uppercase tracking-widest mb-3">
                                <span>
                                    <i class="fa-regular fa-calendar mr-1"></i>
                                    {{ $item->created_at->format('d M Y') }}
                                </span>
                            </div>

                            <h4
                                class="text-lg font-bold text-slate-900 leading-snug mb-3 group-hover:text-green-600 transition-colors">
                                {{ $item->judul }}
                            </h4>

                            <p class="text-slate-500 text-xs leading-relaxed line-clamp-3 mb-6">
                                {{ Str::limit(strip_tags($item->konten), 100) }}
                            </p>

                            <div class="mt-auto">
                                <a href="{{ route('artikel.show', $item->id) }}"
                                    class="text-green-600 text-xs font-bold uppercase tracking-wider hover:text-green-700 transition">
                                        BACA SELENGKAPNYA →
                                    </a>
                            </div>

                        </div>
                    </article>

                @empty
                    <p>Belum ada artikel.</p>
                @endforelse

            </div>
        </div>
    </section>


    <script>
        function filterArticles(category, btn) {
            const articles = document.querySelectorAll('.article-item');
            const buttons = document.querySelectorAll('.filter-btn');

            // reset tombol
            buttons.forEach(b => {
                b.classList.remove('bg-green-600', 'text-white');
                b.classList.add('bg-white', 'text-slate-500');
            });

            // tombol aktif
            btn.classList.add('bg-green-600', 'text-white');
            btn.classList.remove('bg-white', 'text-slate-500');

            // filter artikel
            articles.forEach(article => {
                const itemCategory = article.getAttribute('data-category');

                if (category === 'semua' || itemCategory === category) {
                    article.style.display = 'flex';
                } else {
                    article.style.display = 'none';
                }
            });
        }
    </script>
</x-layout-user>