<x-layout-user>

<section class="py-16 bg-slate-100 min-h-screen overflow-x-auto">

    {{-- JUDUL --}}
    <div class="text-center mb-16">

        <h1 class="text-5xl font-black uppercase tracking-tight text-slate-800">
            Struktur Organisasi
        </h1>

        <h2 class="text-2xl font-bold text-slate-600 mt-3">
            Dinas Pertanian Tahun 2025
        </h2>

        <div class="w-40 h-1 bg-slate-800 mx-auto mt-6 rounded-full"></div>

    </div>

    {{-- FLOWCHART --}}
    <div class="min-w-[1600px] flex justify-center px-10">

        @foreach($strukturs as $item)

            <div class="flex flex-col items-center relative">

                {{-- CARD UTAMA --}}
                <div class="bg-white border border-slate-300 rounded-3xl shadow-2xl overflow-hidden w-[370px] hover:-translate-y-1 transition-all duration-300">

                    {{-- HEADER --}}
                    <div class="bg-gradient-to-r from-slate-800 to-slate-700 p-5 text-center">

                        <div class="w-32 aspect-[3/4] mx-auto rounded-2xl overflow-hidden border-4 border-white shadow-lg">

                            <img src="{{ asset('storage/'.$item->foto) }}"
                                 class="w-full h-full object-cover">

                        </div>

                    </div>

                    {{-- BODY --}}
                    <div class="p-6 text-center">

                        <div class="bg-slate-100 border border-slate-200 rounded-xl py-3 px-4 mb-5">

                            <h3 class="font-black uppercase text-slate-800 text-lg">
                                {{ $item->jabatan }}
                            </h3>

                            @if($item->bidang)
                                <p class="text-sm text-slate-500 mt-1">
                                    {{ $item->bidang }}
                                </p>
                            @endif

                        </div>

                        <h4 class="text-2xl font-bold text-slate-800">
                            {{ $item->nama }}
                        </h4>

                        <p class="text-slate-500 mt-2">
                            NIP. {{ $item->nip }}
                        </p>

                    </div>

                </div>

                {{-- CHILD --}}
                @if($item->childrenRecursive->count())

                    @include('tree', [
                        'children' => $item->childrenRecursive
                    ])

                @endif

            </div>

        @endforeach

    </div>

</section>

</x-layout-user>