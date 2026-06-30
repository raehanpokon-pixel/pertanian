<x-layout-admin>

<div class="p-8 bg-slate-100 min-h-screen">

    <div class="flex justify-between items-center mb-10">

        <div>
            <h1 class="text-4xl font-black text-slate-800">
                Struktur Organisasi
            </h1>

            <p class="text-slate-500 mt-2">
                Kelola susunan struktur organisasi kantor.
            </p>
        </div>

        <a href="{{ route('admin.struktur.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-2xl shadow-lg">

            + Tambah Anggota

        </a>

    </div>

    <div class="space-y-10">

        @foreach($strukturs as $item)

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">

                {{-- HEADER --}}
                <div class="bg-gradient-to-r from-green-600 to-emerald-500 p-6 text-white">

                    <div class="flex items-center gap-5">

                        <img src="{{ asset('storage/'.$item->foto) }}"
                             class="w-24 h-24 rounded-full border-4 border-white object-cover shadow-lg">

                        <div class="flex-1">

                            <h2 class="text-2xl font-bold">
                                {{ $item->nama }}
                            </h2>

                            <p class="text-lg opacity-90">
                                {{ $item->jabatan }}
                            </p>

                            <p class="opacity-75">
                                {{ $item->nip }}
                            </p>

                        </div>

                        <div class="flex gap-3">

                            <a href="{{ route('admin.struktur.edit', $item->id) }}"
                               class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-xl">

                                Edit

                            </a>

                            <form action="{{ route('admin.struktur.destroy', $item->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-xl">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

                {{-- CHILDREN --}}
                @if($item->childrenRecursive->count())

    <div class="p-8">

        @include('admin.struktur.tree', [
            'children' => $item->childrenRecursive
        ])

    </div>

@endif

            </div>

        @endforeach

    </div>

</div>

</x-layout-admin>