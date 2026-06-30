<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dinas Pertanian Gayo Lues</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Kustomisasi scrollbar halus untuk sidebar */
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: rgba(255,255,255,0.03); }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 antialiased">
    <div class="min-h-screen flex">
        
        <aside class="w-72 bg-[#0f3d1e] text-white hidden lg:flex flex-col fixed h-full z-50 shadow-xl shadow-green-950/20">
            <div class="p-6 border-b border-white/5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-amber-400 rounded-xl flex items-center justify-center text-[#0f3d1e] shadow-lg shadow-amber-400/20 transform transition hover:scale-105 duration-300">
                        <i class="fa-solid fa-leaf text-xl"></i>
                    </div>
                    <div>
                        <span class="text-lg font-black tracking-tight uppercase block leading-none">Admin<span class="text-amber-400">Gayo</span></span>
                        <span class="text-[10px] text-green-300/60 font-medium tracking-wider uppercase mt-1 block">Dinas Pertanian</span>
                    </div>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto p-4 space-y-1.5 custom-scrollbar">
                <p class="text-[10px] font-bold text-green-400/40 uppercase tracking-[0.2em] mb-3 pt-2 pl-3">Main Menu</p>
                
                <a href="{{ route('admin.home') }}" 
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.home') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-house text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.home') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Dashboard
                </a>

                <a href="{{ route('admin.galeri.index') }}" 
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.galeri.index') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-image text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.galeri.index') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Post Galeri
                </a>

                <a href="{{ route('admin.artikel.index') }}" 
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.artikel.*') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-newspaper text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.artikel.*') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Kelola Artikel
                </a>

                <a href="{{ route('admin.bibit.index') }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.bibit.*') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-boxes-stacked text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.bibit.*') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Stok Bibit
                </a>

                <a href="{{ route('admin.jadwal-vaksin.index') }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.jadwal-vaksin.index') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-calendar-check text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.jadwal-vaksin.index') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Jadwal Vaksin
                </a>

                <a href="{{ route('admin.sewa_alat.index') }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.sewa_alat.*') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-toolbox text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.sewa_alat.*') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Sewa Alat
                </a>

                <a href="{{ route('admin.slider.index') }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.slider.*') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-images text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.slider.*') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Slider Home
                </a>

                <a href="{{ route('admin.struktur.index') }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-xl text-sm font-semibold transition-all duration-200 group {{ request()->routeIs('admin.struktur.*') ? 'bg-amber-400 text-[#0f3d1e] shadow-md shadow-amber-400/10' : 'text-slate-300 hover:bg-white/5 hover:text-white' }}">
                    <i class="fa-solid fa-sitemap text-base transition-transform group-hover:scale-110 {{ request()->routeIs('admin.struktur.*') ? 'text-[#0f3d1e]' : 'text-green-400/70' }}"></i> 
                    Struktur Organisasi
                </a>
            </div>
            
        <div class="p-4 border-t border-white/5 bg-[#0b2e16]">

    <button
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        class="flex w-full items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold text-rose-300 hover:bg-rose-500/10 hover:text-rose-400 transition-all duration-200 group">

        <i class="fa-solid fa-right-from-bracket text-base transition-transform group-hover:-translate-x-1"></i>

        Keluar Panel

    </button>

    </div>

    <form id="logout-form"
        action="{{ route('logout') }}"
        method="POST"
        style="display:none;">
        @csrf
    </form>
    </aside>
        <div class="flex-1 lg:ml-72 flex flex-col min-w-0">
            
            <header class="bg-white/80 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-40 px-6 lg:px-8 py-3.5 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button class="lg:hidden w-10 h-10 flex items-center justify-center text-slate-500 hover:bg-slate-100 rounded-xl transition">
                        <i class="fa-solid fa-bars text-lg"></i>
                    </button>
                    <h2 class="text-slate-800 font-bold text-base tracking-tight uppercase hidden sm:block">Dinas Pertanian Gayo Lues</h2>
                    <h2 class="text-slate-800 font-bold text-base tracking-tight uppercase sm:hidden">Admin</h2>
                </div>
                
                <div class="flex items-center gap-3 pl-3 border-l border-slate-100">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-800 tracking-tight">Operator</p>
                        <div class="flex items-center justify-end gap-1.5 mt-0.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span class="text-[11px] text-emerald-600 font-semibold leading-none">Online</span>
                        </div>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-green-50 text-[#0f3d1e] border border-green-100 flex items-center justify-center font-bold shadow-sm">
                        AD
                    </div>
                </div>
            </header>

            <main class="p-6 lg:p-8 flex-1">
                {{ $slot }}
            </main>
        </div>

    </div>
</body>
</html>