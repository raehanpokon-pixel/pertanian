<x-layout-user>

    {{-- Header --}}
    <section class="bg-[#164d27] pt-32 pb-20 text-center text-white">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tight">
                {{ $artikel->judul }}
            </h1>

            <p class="mt-4 text-green-200 text-sm">
                {{ $artikel->created_at->format('d F Y') }}
            </p>
        </div>
    </section>

    {{-- Detail Artikel --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6">

         {{-- Tombol kembali (panah kiri atas) --}}
   <div class="fixed top-24 left-6 z-50">
    <a href="{{ route('artikel.index') }}"
       class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white shadow-md text-slate-700 hover:bg-green-600 hover:text-white transition duration-300">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
</div>

            {{-- Gambar --}}
            <div class="mb-8">
                <img src="{{ asset($artikel->gambar) }}" alt="{{ $artikel->judul }}"
                    class="w-full rounded-2xl shadow-lg object-cover max-h-[500px]">
            </div>

            {{-- Kategori --}}
            <div class="mb-6">
                <span class="bg-green-600 text-white text-xs px-4 py-2 rounded-full uppercase font-bold">
                    {{ $artikel->kategori }}
                </span>
            </div>

            
           

            {{-- Isi Artikel --}}
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="text-slate-700 leading-relaxed">
                    {!! nl2br(e($artikel->isi)) !!}
                </div>
            </div>



        </div>
    </section>

</x-layout-user>