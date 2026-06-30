<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Pertanian Kabupaten Gayo Lues</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .active-link {
            color: #16a34a; /* black-600 */
            position: relative;
        }
        .active-link::after {
            content: '';
            position: absolute;
            bottom: -25px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #16a34a;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 overflow-x-hidden">

    <header class="bg-white sticky top-0 z-[999] shadow-md">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex justify-between items-center py-4">
            <a href="/" class="flex items-center gap-3 shrink-0">
                <img src="/image/kabupaten_gayo_lues_vector_logo1-removebg-preview.png" alt="Logo" class="h-10 md:h-12 w-auto">
                <div class="hidden sm:block">
                    <h1 class="text-lg font-extrabold text-[#164d27] leading-none uppercase">Dinas Pertanian</h1>
                    <p class="text-[8px] text-gray-500 font-bold tracking-widest mt-1 uppercase">Kabupaten Gayo Lues</p>
                </div>
            </a>

            <nav class="hidden lg:flex items-center gap-6 text-[14px] font-bold text-gray-600 tracking-widest">
                <a href="/" class="hover:text-black-600 transition">BERANDA</a>
                <a href="/layanan/index" class="hover:text-black-600 transition">LAYANAN PUBLIK</a>
                
                <div class="relative">
                    <button id="btnProfil" class="flex items-center gap-1 uppercase hover:text-black-600 outline-none cursor-pointer py-2">
                        PROFIL INSTANSI <i id="iconProfil" class="fa-solid fa-chevron-down text-[9px] transition-transform duration-300"></i>
                    </button>
                    <div id="menuProfil" class="hidden absolute left-0 mt-3 w-56 bg-white border border-gray-100 shadow-2xl rounded-xl py-2 z-[1000]">
                        <a href="/visi" class="block px-5 py-3 text-gray-700 hover:bg-black-50 hover:text-black-600 border-b border-gray-50">Visi & Misi</a>
                        <a href="/struktur" class="block px-5 py-3 text-gray-700 hover:bg-black-50 hover:text-black-600 border-b border-gray-50">Struktur Organisasi</a>
                        <a href="/profil/tupoksi" class="block px-5 py-3 text-gray-700 hover:bg-black-50 hover:text-black-600">Tupoksi</a>
                    </div>
                </div>

                <a href="/artikel" class="hover:text-black-600 transition">ARTIKEL</a>
                <a href="/galeri" class="hover:text-black-600 transition">GALERI</a>
                <a href="/kontak" class="ml-2 bg-[#16a34a] text-white px-6 py-2.5 rounded-full hover:bg-black-700 transition shadow-lg shadow-black-100 uppercase text-[10px]">Kontak</a>
            </nav>

            <button class="lg:hidden text-gray-600 text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>
    <main class="min-h-screen">
        {{ $slot }}
        </main>
  <footer class="bg-white text-slate-900 pt-24 pb-12 relative overflow-hidden border-t border-slate-100">
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-100 via-green-600 to-green-100 opacity-70"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
            
            <div class="space-y-6">
                <div class="flex items-center gap-4">
                    <img src="/image/kabupaten_gayo_lues_vector_logo1-removebg-preview.png" 
                         class="h-16 w-auto" alt="Logo Kabupaten Gayo Lues">
                    <div>
                        <h4 class="font-extrabold text-2xl text-slate-950 leading-none tracking-tighter">Dinas Pertanian</h4>
                        <p class="text-[10px] text-green-700 font-black mt-1 uppercase tracking-[0.2em] leading-none">Kabupaten Gayo Lues</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed text-justify">
                    Mewujudkan kemandirian pangan dan kesejahteraan petani di Kabupaten Gayo Lues melalui inovasi teknologi dan pelayanan publik yang unggul dan berkelanjutan.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:border-slate-900 transition-all group">
                        <i class="fa-brands fa-facebook-f text-sm text-slate-500 group-hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:border-slate-900 transition-all group">
                        <i class="fa-brands fa-instagram text-sm text-slate-500 group-hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center hover:bg-slate-900 hover:border-slate-900 transition-all group">
                        <i class="fa-brands fa-youtube text-sm text-slate-500 group-hover:text-white"></i>
                    </a>
                </div>
            </div>

            <div>
                <h5 class="text-xs font-black mb-8 uppercase tracking-[0.3em] text-slate-400">Eksplorasi</h5>
                <ul class="space-y-4 text-sm font-semibold">
                    <li><a href="#" class="text-slate-700 hover:text-green-700 hover:translate-x-2 transition-all inline-block">Profil Instansi</a></li>
                    <li><a href="#" class="text-slate-700 hover:text-green-700 hover:translate-x-2 transition-all inline-block">Layanan Publik</a></li>
                    <li><a href="#" class="text-slate-700 hover:text-green-700 hover:translate-x-2 transition-all inline-block">Data Pertanian</a></li>
                    <li><a href="#" class="text-slate-700 hover:text-green-700 hover:translate-x-2 transition-all inline-block">Galeri Kegiatan</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-xs font-black mb-8 uppercase tracking-[0.3em] text-slate-400">Hubungi Kami</h5>
                <ul class="space-y-6 text-sm">
                    <li class="flex gap-4">
                        <i class="fa-solid fa-location-dot text-green-600 text-lg mt-1"></i>
                        <span class="text-slate-700 leading-relaxed">
                            Jl. Komplek Perkantoran IRC, Blangkejeren,<br>
                            Kab. Gayo Lues, Aceh, Indonesia 24652.
                        </span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="fa-solid fa-phone text-green-600"></i>
                        <span class="text-slate-700">+62 (0642) 123-4567</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <i class="fa-solid fa-envelope text-green-600"></i>
                        <span class="text-slate-700">info@distan.gayolues.go.id</span>
                    </li>
                </ul>
            </div>

            <div>
                <h5 class="text-xs font-black mb-8 uppercase tracking-[0.3em] text-slate-400">Jam Operasional</h5>
                <div class="bg-slate-50 p-6 rounded-[24px] border border-slate-100 space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-black uppercase tracking-wider">Senin - Kamis</span>
                        <span class="text-xs font-black text-slate-950 bg-slate-100 px-2.5 py-1 rounded-md">08:00 - 16:30</span>
                    </div>
                    <div class="h-px bg-slate-100 w-full"></div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-black uppercase tracking-wider">Jumat</span>
                        <span class="text-xs font-black text-slate-950 bg-slate-100 px-2.5 py-1 rounded-md">08:00 - 17:00</span>
                    </div>
                    <div class="pt-2 text-[10px] text-green-700/80 font-medium italic leading-relaxed">
                        *Pelayanan tutup pada hari libur nasional & akhir pekan.
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-10 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] text-center md:text-left leading-relaxed">
                © 2026 DINAS PERTANIAN KABUPATEN GAYO LUES. <br class="md:hidden"> ALL RIGHTS RESERVED.
            </div>
            <div class="flex gap-8 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                <a href="#" class="hover:text-green-700 transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('dropdownBtn');
        const menu = document.getElementById('dropdownMenu');
        const icon = document.getElementById('dropdownIcon');

        // Fungsi Toggle Menu
        btn.addEventListener('click', function(e) {
            e.stopPropagation(); // Mencegah event lari ke document
            const isHidden = menu.classList.contains('hidden');
            
            if (isHidden) {
                menu.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                menu.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });

        // Menutup menu jika klik di luar area dropdown
        document.addEventListener('click', function(e) {
            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        });
    });


    // Gunakan fungsi ini agar script langsung berjalan
    (function() {
        const toggleDropdown = () => {
            const btn = document.querySelector('#btnProfil');
            const menu = document.querySelector('#menuProfil');
            const icon = document.querySelector('#iconProfil');

            if (btn && menu) {
                btn.onclick = function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Toggle class hidden
                    const isHidden = menu.classList.contains('hidden');
                    
                    if (isHidden) {
                        menu.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    } else {
                        menu.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                };

                // Tutup menu jika klik di mana saja selain menu
                document.onclick = function(e) {
                    if (!btn.contains(e.target) && !menu.contains(e.target)) {
                        menu.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    }
                };
            }
        };

        // Jalankan saat dokumen siap
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", toggleDropdown);
        } else {
            toggleDropdown();
        }
    })();
</script>

    </body>
</html>