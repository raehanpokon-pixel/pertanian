<x-layout-user>
    <main id="hero-slider" class="relative min-h-screen flex items-center overflow-hidden bg-slate-900">

        <div class="absolute inset-0 z-0">
            <img id="bg-image-1"
                src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=2000"
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-100"
                alt="Slide 1">

            <img id="bg-image-2" src=""
                class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 opacity-0"
                alt="Slide 2">

            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-transparent z-10"></div>
        </div>

        <div class="container mx-auto px-6 relative z-20 grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-white space-y-6">
                <div
                    class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                    <i class="fa-solid fa-cloud-sun text-yellow-400"></i>
                    <span id="weather-text" class="text-sm font-semibold tracking-wide">22 °C • Cerah Berawan • Gayo
                        Lues</span>
                </div>

                <div class="overflow-hidden">
                    <h2 id="hero-title" class="text-5xl md:text-6xl font-extrabold leading-tight">
                        Mewujudkan <span class="text-green-400 italic">Kemandirian</span> <br>Pangan Gayo Lues.
                    </h2>
                </div>
                <p id="hero-desc" class="text-lg text-gray-300 max-w-lg">
                    Inovasi teknologi pertanian berkelanjutan untuk meningkatkan kesejahteraan petani dan kualitas hasil
                    bumi Negeri Seribu Bukit.
                </p>

                <div class="flex gap-4 pt-4">
                    <button
                        class="px-8 py-4 bg-green-600 hover:bg-green-500 text-white rounded-2xl font-black uppercase text-xs tracking-widest transition-all">Jelajahi
                        Lebih Lanjut</button>
                </div>
            </div>

            <div class="hidden lg:block relative">
                <div
                    class="glass-effect rounded-[40px] p-10 border border-white/20 max-w-sm ml-auto shadow-2xl backdrop-blur-2xl text-white">
                    <div class="space-y-8">
                        <div
                            class="flex justify-between items-center border-b border-white/10 pb-6 uppercase tracking-[0.2em] text-xs font-black opacity-60">
                            <span>Data Sektor Riil</span>
                            <i class="fa-solid fa-chart-simple text-green-400"></i>
                        </div>
                        <div class="space-y-10 pt-2">
                            <div>
                                <p class="text-xs font-bold text-green-400 uppercase tracking-widest mb-1">Luas Lahan
                                    Aktif</p>
                                <div class="flex items-baseline gap-2">
                                    <p id="stat1-value" class="text-5xl font-black tracking-tighter">12.450</p>
                                    <span class="text-lg font-light opacity-60 uppercase">Ha</span>
                                </div>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-green-400 uppercase tracking-widest mb-1">Target
                                    Produksi 2026</p>
                                <div class="flex items-baseline gap-2">
                                    <p id="stat2-value" class="text-5xl font-black tracking-tighter">45.000</p>
                                    <span class="text-lg font-light opacity-60 uppercase">Ton</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 z-30">
            <div class="flex items-center gap-6">
                <button onclick="prevSlide()"
                    class="w-10 h-10 rounded-full border border-white/20 text-white hover:bg-white hover:text-black transition-all">
                    <i class="fa-solid fa-chevron-left text-xs"></i>
                </button>
                <div class="flex items-center gap-3">
                    <span id="current-index" class="text-white text-xs font-bold">01</span>
                    <div class="w-32 h-1 bg-white/10 rounded-full overflow-hidden">
                        <div id="progress-bar" class="w-1/3 h-full bg-green-500 transition-all duration-700"></div>
                    </div>
                    <span class="text-white/50 text-xs font-bold">03</span>
                </div>
                <button onclick="nextSlide()"
                    class="w-10 h-10 rounded-full border border-white/20 text-white hover:bg-white hover:text-black transition-all">
                    <i class="fa-solid fa-chevron-right text-xs"></i>
                </button>
            </div>
        </div>
    </main>


    <section class="py-24 bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-100">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h3 class="text-emerald-600 font-bold text-sm uppercase tracking-widest mb-3">Program Utama</h3>
                <h2 class="text-3xl md:text-4xl font-black tracking-tight">Fokus Penguatan Sektor Pertanian Gayo Lues
                </h2>
                <p class="text-slate-500 dark:text-slate-400 mt-4">Sinergi teknologi dan kearifan lokal demi mewujudkan
                    swasembada pangan yang merata.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-2xl bg-emerald-100 dark:bg-emerald-900/50 flex items-center justify-center text-emerald-600 mb-6">
                        <i class="fa-solid fa-wheat-awn text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Swasembada Pangan</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Optimalisasi pengelolaan sawah
                        dan lahan kering untuk menjamin ketersediaan pangan pokok internal daerah.</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-2xl bg-amber-100 dark:bg-amber-900/50 flex items-center justify-center text-amber-600 mb-6">
                        <i class="fa-solid fa-mug-hot text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Komoditas Global</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Pengembangan mutu Kopi Arabika
                        Gayo berstandar internasional demi menembus pasar ekspor yang lebih luas.</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center text-blue-600 mb-6">
                        <i class="fa-solid fa-droplet text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Irigasi Pintar</h4>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">Pemanfaatan sistem sensor
                        pintu air digital terintegrasi guna mendistribusikan air secara adil dan berkala.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-slate-950 text-slate-800 dark:text-slate-100">
        <div class="container mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <h3 class="text-emerald-600 font-bold text-sm uppercase tracking-widest mb-3">
                        Kabar Seribu Bukit
                    </h3>
                    <h2 class="text-3xl md:text-4xl font-black tracking-tight">
                        Berita & Edukasi Petani
                    </h2>
                </div>

                <a href="/artikel"
                    class="mt-4 md:mt-0 text-emerald-600 hover:text-emerald-500 font-bold text-sm inline-flex items-center gap-2 transition-all">
                    Lihat Semua Berita
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>


            {{-- Artikel dari database --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($artikels as $artikel)
                    <article class="group cursor-pointer">

                        <div class="overflow-hidden rounded-3xl mb-4 bg-slate-100 aspect-video relative">
                            <img src="{{ asset($artikel->gambar) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-all duration-500"
                                alt="{{ $artikel->judul }}">
                        </div>

                        <div class="space-y-2">

                            {{-- kategori --}}
                            <span
                                class="text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-950 px-3 py-1 rounded-full">
                                {{ $artikel->kategori }}
                            </span>

                            {{-- judul --}}
                            <h4 class="text-lg font-bold group-hover:text-emerald-600 transition-colors line-clamp-2">
                                {{ $artikel->judul }}
                            </h4>

                            {{-- tanggal & penulis --}}
                            <p class="text-slate-400 text-xs">
                                {{ $artikel->created_at->format('d M Y') }}
                                • Oleh {{ $artikel->penulis }}
                            </p>

                        </div>
                    </article>

                @empty
                    <p class="text-slate-500">
                        Belum ada artikel tersedia.
                    </p>
                @endforelse

            </div>


            {{-- Pagination / Next Page --}}
            <div class="mt-10 flex justify-center">
                {{ $artikels->links() }}
            </div>

        </div>
    </section>


    <script>
        // ambil slider dari database (admin)
        const slides = [
            @foreach($homeSliders as $slider)
                {
                            img: "{{ asset('storage/' . $slider->gambar) }}"
                        },
            @endforeach
];

        let currentIndex = 0;
        let isTransitioning = false;
        let activeLayer = 1;

        function updateSlide() {
            if (isTransitioning || slides.length === 0) return;
            isTransitioning = true;

            const slide = slides[currentIndex];
            const nextLayer = activeLayer === 1 ? 2 : 1;

            const imgActive = document.getElementById(`bg-image-${activeLayer}`);
            const imgNext = document.getElementById(`bg-image-${nextLayer}`);

            // ganti gambar
            imgNext.src = slide.img;

            imgNext.onload = function () {
                // fade effect
                imgNext.classList.remove('opacity-0');
                imgNext.classList.add('opacity-100');

                imgActive.classList.remove('opacity-100');
                imgActive.classList.add('opacity-0');

                // update nomor slider
                document.getElementById('current-index').innerText =
                    `0${currentIndex + 1}`;

                // progress bar
                document.getElementById('progress-bar').style.width =
                    `${((currentIndex + 1) / slides.length) * 100}%`;

                activeLayer = nextLayer;
                isTransitioning = false;
            };
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlide();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide();
        }

        // tampilkan gambar pertama
        if (slides.length > 0) {
            document.getElementById('bg-image-1').src = slides[0].img;
            document.getElementById('progress-bar').style.width =
                `${100 / slides.length}%`;
        }

        // auto slide tiap 4 detik
        setInterval(() => {
            nextSlide();
        }, 4000);
    </script>


    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        #bg-image-1,
        #bg-image-2 {
            transition: opacity 1000ms cubic-bezier(0.4, 0, 0.2, 1);
            will-change: opacity;
            pointer-events: none;
        }

        #hero-title,
        #hero-desc,
        #stat1-value,
        #stat2-value {
            transition: all 600ms ease-out;
        }

        #hero-slider img {
            animation: kenBurns 20s infinite alternate ease-in-out;
        }

        @keyframes kenBurns {
            from {
                transform: scale(1) translate(0, 0);
            }

            to {
                transform: scale(1.1) translate(-1%, -1%);
            }
        }
    </style>
</x-layout-user>