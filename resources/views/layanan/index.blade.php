<x-layout-user>
    
    <section class="flex items-center pt-40 pb-32 relative overflow-hidden min-h-[80vh]" id="hero-slider">
        {{-- slider dari database --}}
@forelse($sliders as $index => $slider)
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000 {{ $index == 0 ? 'opacity-0' : 'opacity-0' }}">
        <img src="{{ asset('storage/' . $slider->gambar) }}"
             class="w-full h-full object-cover ">
    </div>
@empty
    <div class="hero-slide absolute inset-0 transition-opacity duration-1000 opacity-100">
        <img src="/image/default.jpg"
             class="w-full h-full object-cover grayscale brightness-[0.3]">
    </div>
@endforelse

        <div class="absolute inset-0 bg-slate-900/60 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#164d27] via-transparent to-black/50"></div>

        <div class="absolute inset-y-0 left-4 flex items-center z-30">
            <button onclick="changeSlide(-1)"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-green/20 border border-white/20 text-white transition-all backdrop-blur-sm flex items-center justify-center">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
        <div class="absolute inset-y-0 right-4 flex items-center z-30">
            <button onclick="changeSlide(1)"
                class="w-12 h-12 rounded-full bg-white/10 hover:bg-green/20 border border-white/20 text-white transition-all backdrop-blur-sm flex items-center justify-center">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="absolute bottom-40 left-1/2 -translate-x-1/2 z-30 flex gap-3">
            <div class="slider-dot w-8 h-1.5 rounded-full bg-white transition-all cursor-pointer"
                onclick="goToSlide(0)"></div>
            <div class="slider-dot w-8 h-1.5 rounded-full bg-white/30 transition-all cursor-pointer"
                onclick="goToSlide(1)"></div>
            <div class="slider-dot w-8 h-1.5 rounded-full bg-white/30 transition-all cursor-pointer"
                onclick="goToSlide(2)"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span
                class="inline-block px-4 py-1.5 bg-white/10 border border-white/20 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-6 backdrop-blur-sm">
                Pusat Pelayanan Terpadu
            </span>
            <h1 class="text-5xl md:text-8xl font-black text-white mb-6 tracking-tighter">
                Layanan <span class="text-green-500">Publik</span>
            </h1>
            <p class="text-slate-300 max-w-2xl mx-auto text-lg md:text-xl leading-relaxed">
                Komitmen kami untuk memberikan pelayanan yang transparan, cepat, dan mudah diakses bagi seluruh
                masyarakat Gayo Lues.
            </p>
        </div>
    </section>

    <main class="container mx-auto px-6 -mt-12 relative z-20 pb-24">
        <div
            class="bg-white/80 backdrop-blur-md p-6 rounded-[32px] shadow-2xl shadow-green-900/10 border border-white mb-12">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <div class="relative w-full lg:w-1/3">
                    <i class="fa-solid fa-magnifying-glass absolute left-5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" id="searchInput" placeholder="Cari bantuan, sertifikasi..."
                        class="w-full pl-14 pr-6 py-4 rounded-2xl bg-slate-100/50 border-transparent focus:bg-white focus:ring-4 focus:ring-green-500/10 focus:border-green-500 transition-all text-sm font-medium">
                </div>
                <div class="flex gap-2 overflow-x-auto w-full lg:w-auto pb-2 lg:pb-0 no-scrollbar" id="filterButtons">
                    <button data-filter="all"
                        class="filter-btn px-6 py-3 rounded-xl bg-green-600 text-white text-xs font-black uppercase tracking-widest shadow-lg shadow-green-600/20 active">Semua</button>
                    <button data-filter="bibit"
                        class="filter-btn px-6 py-3 rounded-xl bg-white text-slate-500 text-xs font-black uppercase tracking-widest hover:bg-green-600 hover:text-white border border-slate-100 transition-all duration-300 shadow-sm">Bantuan
                        & Bibit</button>
                    <button data-filter="ternak"
                        class="filter-btn px-6 py-3 rounded-xl bg-white text-slate-500 text-xs font-black uppercase tracking-widest hover:bg-green-600 hover:text-white border border-slate-100 transition-all duration-300 shadow-sm">Kesehatan
                        Hewan</button>
                    <button data-filter="edukasi"
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-10">
            <div class="lg:col-span-2 space-y-6" id="servicesContainer">
                <div data-category="bibit"
                    class="service-card bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-green-900/5 transition-all duration-500 group">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div
                            class="w-20 h-20 bg-green-50 rounded-[24px] flex items-center justify-center text-green-600 text-3xl shrink-0 group-hover:bg-green-600 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fa-solid fa-wheat-awn"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                                <h3 class="service-title text-2xl font-black text-slate-900 tracking-tight">Permohonan
                                    Bantuan Bibit Unggul</h3>
                                <span
                                    class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-blue-100">Gratis</span>
                            </div>
                            <p class="text-slate-500 leading-relaxed mb-8">Penyediaan bibit padi, jagung, dan palawija
                                bersertifikat bagi kelompok tani yang terdaftar resmi di Simluhtan.</p>
                            <div class="flex flex-wrap gap-4 items-center">
                                <a href="/layanan/bibit"
                                    class="inline-block bg-slate-900 text-white px-8 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-green-600 transition-all shadow-lg text-center">
                                    Detail layanan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-category="ternak"
                    class="service-card bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-red-900/5 transition-all duration-500 group">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div
                            class="w-20 h-20 bg-red-50 rounded-[24px] flex items-center justify-center text-red-600 text-3xl shrink-0 group-hover:bg-red-600 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fa-solid fa-syringe"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                                <h3 class="service-title text-2xl font-black text-slate-900 tracking-tight">Vaksinasi &
                                    Kesehatan Hewan</h3>
                                <span
                                    class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-blue-100">Gratis</span>
                            </div>
                            <p class="text-slate-500 leading-relaxed mb-8">Layanan vaksinasi PMK, Rabies, dan
                                pemeriksaan kesehatan untuk ternak maupun hewan peliharaan masyarakat.</p>
                            <div class="">
                                <a href="/layanan/jadwal-vaksin"
                                    class="bg-slate-900 text-white px-8 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-emerald-600 transition-all shadow-lg text-center">
                                    Detail Layanan
                                </a>

                                <a href="/layanan/jadwal-vaksin"
                                    class="text-slate-400 hover:text-emerald-600 text-xs font-bold uppercase tracking-widest flex items-center gap-2 transition">
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-category="bibit"
                    class="service-card bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-orange-900/5 transition-all duration-500 group">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div
                            class="w-20 h-20 bg-orange-50 rounded-[24px] flex items-center justify-center text-orange-600 text-3xl shrink-0 group-hover:bg-orange-600 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fa-solid fa-tractor"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                                <h3 class="service-title text-2xl font-black text-slate-900 tracking-tight">Sewa Alat
                                    Mesin Pertanian</h3>
                                <span
                                    class="bg-orange-50 text-orange-600 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-orange-100">Tarif
                                    PNBP</span>
                            </div>
                            <p class="text-slate-500 leading-relaxed mb-8">Modernisasi pertanian dengan peminjaman
                                traktor dan combine harvester untuk efisiensi pengolahan lahan.</p>
                            <div class="flex flex-wrap gap-4 items-center">
                                <a href="{{ route('layanan.sewa-alat') }}"
                                    class="bg-slate-900 text-white px-8 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-orange-600 transition-all shadow-lg inline-block">
                                    Cek Stok Alat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-category="sertifikasi"
                    class="service-card bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-purple-900/5 transition-all duration-500 group">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div
                            class="w-20 h-20 bg-purple-50 rounded-[24px] flex items-center justify-center text-purple-600 text-3xl shrink-0 group-hover:bg-purple-600 group-hover:text-white transition-all duration-500 shadow-inner">
                            <i class="fa-solid fa-id-card"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap justify-between items-start mb-3 gap-2">
                                <h3 class="service-title text-2xl font-black text-slate-900 tracking-tight">Pendaftaran
                                    Kartu Tani</h3>
                                <span
                                    class="bg-blue-50 text-blue-600 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-blue-100">Gratis</span>
                            </div>
                            <p class="text-slate-500 leading-relaxed mb-8">Akses pupuk bersubsidi dan bantuan finansial
                                melalui pendataan identitas petani yang terintegrasi.</p>
                            <div class="flex flex-wrap gap-4 items-center">
                                <button onclick="openModal('Pendaftaran Kartu Tani', 'kartu-tani')"
                                    class="bg-slate-900 text-white px-8 py-3.5 rounded-2xl text-xs font-black uppercase tracking-widest hover:bg-purple-600 transition-all shadow-lg">Daftar
                                    Sekarang</button>
                                <a href="/layanan/pendaftaran"
                                    class="text-slate-400 hover:text-purple-600 text-xs font-bold uppercase tracking-widest flex items-center gap-2 transition">Cek
                                    Status <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8 lg:sticky lg:top-28 self-start">
                <div class="bg-white p-8 rounded-[32px] shadow-sm border border-slate-100 relative overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-green-50 rounded-full opacity-50"></div>
                    <h4
                        class="font-black text-slate-900 mb-8 flex items-center gap-3 uppercase tracking-tighter text-lg">
                        <span class="w-2 h-6 bg-green-600 rounded-full"></span> Alur Pengajuan
                    </h4>
                    <div class="space-y-8 relative">
                        <div class="absolute left-4 top-2 bottom-2 w-0.5 bg-slate-100"></div>
                        <div class="flex gap-6 relative">
                            <div
                                class="w-8 h-8 rounded-full bg-[#164d27] text-white flex items-center justify-center font-black text-[10px] shrink-0">
                                1</div>
                            <div>
                                <p class="text-sm font-bold text-slate-800 mb-1">Cek Syarat</p>
                                <p class="text-[11px] text-slate-500">Pilih layanan & siapkan dokumen.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 relative">
                            <div
                                class="w-8 h-8 rounded-full bg-[#164d27] text-white flex items-center justify-center font-black text-[10px] shrink-0">
                                2</div>
                            <div>
                                <p class="text-sm font-bold text-slate-800 mb-1">Isi Formulir</p>
                                <p class="text-[11px] text-slate-500">Online atau datang ke kantor dinas.</p>
                            </div>
                        </div>
                        <div class="flex gap-6 relative">
                            <div
                                class="w-8 h-8 rounded-full bg-[#164d27] text-white flex items-center justify-center font-black text-[10px] shrink-0">
                                3</div>
                            <div>
                                <p class="text-sm font-bold text-slate-800 mb-1">Verifikasi</p>
                                <p class="text-[11px] text-slate-500">Proses teknis selama 3-7 hari kerja.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-green-600 to-green-800 p-8 rounded-[32px] shadow-xl text-white">
                    <i class="fa-brands fa-whatsapp text-4xl mb-4 opacity-50"></i>
                    <h4 class="text-xl font-black mb-2">Butuh Bantuan?</h4>
                    <p class="text-xs text-green-100/70 mb-6 leading-relaxed">Hubungi admin untuk informasi lebih lanjut
                        mengenai bantuan pertanian atau kendala akses layanan.</p>
                    <a href="https://wa.me/628123456789"
                        class="block w-full text-center bg-white text-green-800 py-4 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-yellow-400 transition-all">Chat
                        WhatsApp</a>
                </div>
            </div>
        </div>
    </main>

    <div id="serviceModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 overflow-y-auto">
        <div class="fixed inset-0 bg-slate-900/80 backdrop-blur-md" onclick="closeModal()"></div>
        <div class="bg-white w-full max-w-lg rounded-[40px] shadow-2xl relative z-10 overflow-hidden transform transition-all duration-300 scale-95 opacity-0"
            id="modalContent">
            <div class="p-10">
                <div class="flex justify-between items-start mb-8">
                    <div>
                        <h3 id="modalTitle" class="text-3xl font-black text-slate-900 tracking-tighter">Form Layanan
                        </h3>
                        <p class="text-slate-500 text-sm mt-2">Lengkapi data untuk memproses permohonan Anda.</p>
                    </div>
                    <button onclick="closeModal()"
                        class="w-12 h-12 rounded-2xl bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-red-50 hover:text-red-500 transition-all">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <form id="submissionForm" class="space-y-5">
                    <input type="hidden" id="serviceCategory" name="category">

                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Nama
                            Pemohon</label>
                        <input type="text" required
                            class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:bg-white focus:border-green-500 transition-all text-sm font-bold"
                            placeholder="Nama lengkap...">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Nomor
                            WhatsApp</label>
                        <div class="relative">
                            <span
                                class="absolute left-6 top-1/2 -translate-y-1/2 text-sm font-bold text-slate-400 border-r border-slate-200 pr-3">+62</span>
                            <input type="tel" required pattern="[0-9]{9,15}"
                                class="w-full pl-20 pr-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:bg-white focus:border-green-500 transition-all text-sm font-bold"
                                placeholder="812345678xx">
                        </div>
                    </div>

                    <div class="space-y-2" id="typeSelectionContainer">
                        <label id="typeLabel"
                            class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Jenis
                            Layanan</label>
                        <select id="typeSelect"
                            class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:bg-white focus:border-green-500 transition-all text-sm font-bold appearance-none cursor-pointer"></select>
                    </div>

                    <div id="durationContainer" class="hidden space-y-4 pt-2">
                        <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Durasi
                            Peminjaman</label>

                        <div class="flex flex-wrap gap-2">
                            <button type="button" onclick="setDuration(1)"
                                class="dur-chip px-4 py-2 rounded-xl border-2 border-slate-100 text-[11px] font-black uppercase tracking-tighter text-slate-500 hover:border-orange-500 transition-all">1
                                Hari</button>
                            <button type="button" onclick="setDuration(3)"
                                class="dur-chip px-4 py-2 rounded-xl border-2 border-slate-100 text-[11px] font-black uppercase tracking-tighter text-slate-500 hover:border-orange-500 transition-all">3
                                Hari</button>
                            <button type="button" onclick="setDuration(7)"
                                class="dur-chip px-4 py-2 rounded-xl border-2 border-slate-100 text-[11px] font-black uppercase tracking-tighter text-slate-500 hover:border-orange-500 transition-all">1
                                Minggu</button>
                            <button type="button" onclick="setDuration(30)"
                                class="dur-chip px-4 py-2 rounded-xl border-2 border-slate-100 text-[11px] font-black uppercase tracking-tighter text-slate-500 hover:border-orange-500 transition-all">1
                                Bulan</button>
                        </div>

                        <div
                            class="flex items-center justify-between bg-slate-50 p-2 rounded-3xl border border-slate-100">
                            <button type="button" onclick="adjustDuration(-1)"
                                class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center text-slate-400 hover:text-orange-600 active:scale-90 transition-all">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                            <div class="text-center">
                                <span id="durationVal"
                                    class="text-2xl font-black text-slate-900 block leading-none">1</span>
                                <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Total
                                    Hari</span>
                            </div>
                            <button type="button" onclick="adjustDuration(1)"
                                class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center text-slate-400 hover:text-orange-600 active:scale-90 transition-all">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label
                            class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 ml-1">Kecamatan</label>
                        <select
                            class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:bg-white focus:border-green-500 transition-all text-sm font-bold appearance-none cursor-pointer">
                            <option>Blangkejeren</option>
                            <option>Blangpegayon</option>
                            <option>Rikit Gaib</option>
                            <option>Kutapanjang</option>
                            <option>Terangun</option>
                        </select>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-[#164d27] text-white py-5 rounded-2xl font-black text-xs uppercase tracking-[0.2em] hover:bg-green-600 transition-all shadow-xl active:scale-95">
                            Kirim Permohonan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // --- SLIDER LOGIC ---
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');

        function showSlide(index) {
            if (!slides.length) return;
            slides.forEach(s => s.classList.replace('opacity-100', 'opacity-0'));
            dots.forEach(d => d.classList.replace('bg-white', 'bg-white/30'));
            currentSlide = (index + slides.length) % slides.length;
            slides[currentSlide].classList.replace('opacity-0', 'opacity-100');
            dots[currentSlide].classList.replace('bg-white/30', 'bg-white');
        }
        function changeSlide(n) { showSlide(currentSlide + n); }
        function goToSlide(n) { showSlide(n); }
        setInterval(() => changeSlide(1), 5000);

        // --- SEARCH & FILTER LOGIC ---
        const searchInput = document.getElementById('searchInput');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.service-card');

        function filterServices() {
            const query = searchInput.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;

            cards.forEach(card => {
                const title = card.querySelector('.service-title').innerText.toLowerCase();
                const category = card.dataset.category;
                const matchSearch = title.includes(query);
                const matchFilter = activeFilter === 'all' || category === activeFilter;

                card.style.display = (matchSearch && matchFilter) ? 'block' : 'none';
            });
        }

        filterButtons.forEach(btn => {
            btn.onclick = function () {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-green-600', 'text-white', 'active', 'shadow-lg', 'shadow-green-600/20');
                    b.classList.add('bg-white', 'text-slate-500');
                });
                this.classList.add('bg-green-600', 'text-white', 'active', 'shadow-lg', 'shadow-green-600/20');
                this.classList.remove('bg-white', 'text-slate-500');
                filterServices();
            }
        });
        if (searchInput) searchInput.oninput = filterServices;

        // --- DURATION LOGIC ---
        let totalDays = 1;
        function setDuration(val) {
            totalDays = val;
            updateDurationUI();
        }
        function adjustDuration(n) {
            totalDays = Math.max(1, Math.min(30, totalDays + n));
            updateDurationUI();
        }
        function updateDurationUI() {
            const durVal = document.getElementById('durationVal');
            if (durVal) durVal.innerText = totalDays;

            const chips = document.querySelectorAll('.dur-chip');
            chips.forEach(chip => {
                const chipVal = parseInt(chip.innerText) || (chip.innerText.includes('Minggu') ? 7 : 30);
                if (chipVal === totalDays) {
                    chip.classList.add('border-orange-500', 'bg-orange-50', 'text-orange-600');
                } else {
                    chip.classList.remove('border-orange-500', 'bg-orange-50', 'text-orange-600');
                }
            });
        }

        // --- MODAL LOGIC ---
        function openModal(title, category) {
            const modal = document.getElementById('serviceModal');
            const content = document.getElementById('modalContent');
            const typeSelect = document.getElementById('typeSelect');
            const durContainer = document.getElementById('durationContainer');

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('serviceCategory').value = category;

            typeSelect.innerHTML = '';
            durContainer.classList.add('hidden');

            if (category === 'alsintan') {
                const opts = ['Traktor Roda 4', 'Hand Tractor', 'Combine Harvester', 'Pompa Air'];
                opts.forEach(o => typeSelect.add(new Option(o, o)));
                durContainer.classList.remove('hidden');
                setDuration(1);
            } else if (category === 'bibit') {
                const opts = ['Bibit Padi Unggul', 'Bibit Jagung', 'Bibit Kopi'];
                opts.forEach(o => typeSelect.add(new Option(o, o)));
            } else if (category === 'vaksin') {
                const opts = ['Vaksin PMK (Sapi)', 'Vaksin Rabies', 'Cek Kesehatan'];
                opts.forEach(o => typeSelect.add(new Option(o, o)));
            } else {
                const opts = ['Layanan Umum'];
                opts.forEach(o => typeSelect.add(new Option(o, o)));
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            setTimeout(() => content.classList.replace('opacity-0', 'opacity-100'), 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('serviceModal');
            const content = document.getElementById('modalContent');
            content.classList.replace('opacity-100', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        document.getElementById('submissionForm').onsubmit = function (e) {
            e.preventDefault();
            alert('Permohonan berhasil dikirim! Kami akan menghubungi Anda melalui WhatsApp.');
            closeModal();
        };
    </script>

    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        #modalContent {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        /* Style tambahan untuk prefix nomor telpon */
        input[type="tel"]:focus+span {
            border-color: #22c55e;
        }
    </style>
</x-layout-user>