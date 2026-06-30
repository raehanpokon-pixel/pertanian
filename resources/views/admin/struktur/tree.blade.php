<div class="ml-8 mt-6 border-l-4 border-green-500 pl-6 space-y-6">

    @foreach($children as $child)

        <div class="bg-slate-50 rounded-2xl p-5 shadow">

            <div class="flex items-center gap-4">

                <img src="{{ asset('storage/'.$child->foto) }}"
                     class="w-20 h-20 rounded-full object-cover">

                <div class="flex-1">

                    <h3 class="text-xl font-bold text-slate-800">
                        {{ $child->nama }}
                    </h3>

                    <p class="text-green-700 font-semibold">
                        {{ $child->jabatan }}
                    </p>

                    <p class="text-slate-500">
                        {{ $child->nip }}
                    </p>

                </div>

                <div class="flex gap-2">

                    <a href="{{ route('admin.struktur.edit', $child->id) }}"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-xl">

                        Edit

                    </a>

                    <form action="{{ route('admin.struktur.destroy', $child->id) }}"
                          method="POST"
                          onsubmit="return confirm('Hapus data?')">

                        @csrf
                        @method('DELETE')

                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl">
                            Hapus
                        </button>

                    </form>

                </div>

            </div>

            {{-- CHILD RECURSIVE --}}
            @if($child->childrenRecursive->count())

                @include('admin.struktur.tree', [
                    'children' => $child->childrenRecursive
                ])

            @endif

        </div>

    @endforeach

</div>