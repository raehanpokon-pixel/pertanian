<x-layout-admin>
    <div class="p-8 max-w-4xl mx-auto">
        
        <a href="{{ route('admin.galeri.index') }}"
           class="inline-flex items-center gap-2 text-xs font-bold text-slate-400 hover:text-slate-900 transition-colors mb-8 uppercase tracking-widest">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali ke Daftar
        </a>

        <div class="mb-10">
            <h1 class="text-3xl font-black text-slate-900 tracking-tighter uppercase">
                Buat Galeri Baru
            </h1>
            <p class="text-sm text-slate-500 font-medium">
                Tambahkan foto dan informasi galeri.
            </p>
        </div>

        <form action="{{ route('admin.galeri.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="bg-white border border-slate-100 rounded-[2rem] p-10 shadow-sm space-y-8">

                {{-- Judul --}}
                <div>
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 block mb-4">
                        Judul Galeri
                    </label>
                    <input type="text"
                           name="judul"
                           placeholder="Contoh: Distribusi Benih Padi"
                           class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 text-sm font-medium focus:ring-2 focus:ring-emerald-500 outline-none">
                </div>

                {{-- Deskripsi --}}
                <div>
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 block mb-4">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi"
                              rows="5"
                              placeholder="Masukkan deskripsi..."
                              class="w-full bg-slate-50 border-none rounded-2xl px-6 py-4 text-sm font-medium focus:ring-2 focus:ring-emerald-500 outline-none"></textarea>
                </div>

                {{-- Upload Foto --}}
                <div>
                    <label class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 block mb-4">
                        Foto Galeri
                    </label>

                    <div class="relative border-2 border-dashed border-slate-200 rounded-2xl p-8 text-center hover:border-emerald-400 transition-colors">

                        <input
                            type="file"
                            name="foto"
                            id="foto"
                            accept="image/*"
                            class="absolute inset-0 opacity-0 cursor-pointer"
                            onchange="previewImage(event)"
                        >

                        <svg class="w-8 h-8 text-slate-300 mx-auto mb-3"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>

                        <p id="fileText"
                           class="text-xs font-bold text-slate-400 uppercase tracking-widest">
                            Klik atau seret file ke sini
                        </p>

                        <img id="preview"
                             class="hidden mt-5 mx-auto rounded-xl max-h-52 shadow">
                    </div>
                </div>

            </div>

            <div class="flex justify-end mt-8">
                <button type="submit"
                        class="bg-slate-900 text-white px-10 py-4 rounded-2xl text-xs font-black uppercase tracking-[0.2em] hover:bg-emerald-600 transition-all">
                    Simpan Galeri
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];

            if(file){
                document.getElementById('fileText').innerText = file.name;

                const reader = new FileReader();

                reader.onload = function(e){
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
</x-layout-admin>