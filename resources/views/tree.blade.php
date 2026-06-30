<div class="flex flex-col items-center mt-14 relative">

    {{-- GARIS VERTIKAL --}}
    <div class="w-[3px] h-12 bg-slate-500 rounded-full"></div>

    {{-- WRAPPER --}}
   <div class="flex justify-center gap-12 relative pt-12">

    <!-- Garis Horizontal -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 h-[2px] bg-slate-500"
         style="width: calc(100% - 300px);">
    </div>

    @if(count($children) > 1)
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[70%] h-[2px] bg-slate-500"></div>
@endif

        @foreach($children as $child)

            @php
                $isPimpinan = in_array($child->jabatan, [
                    'Wakil Kepala Dinas',
                    'Sekretaris',
                    'Kabid',
                    'Subbag'
                ]);
            @endphp

            @if($isPimpinan)

                <div class="flex flex-col items-center relative">

                    {{-- GARIS --}}
                   <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-[2px] h-12 bg-slate-500"></div>

                    {{-- CARD --}}
                    <div class="bg-white rounded-3xl border border-slate-300 shadow-xl overflow-hidden w-[360px] hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">

                        {{-- TOP --}}
                        <div class="bg-gradient-to-r from-slate-800 to-slate-700 px-6 py-5 text-center">

                            <div class="w-28 aspect-[3/4] mx-auto rounded-2xl overflow-hidden border-4 border-white shadow-lg">

                                <img src="{{ asset('storage/'.$child->foto) }}"
                                     class="w-full h-full object-cover">

                            </div>

                        </div>

                        {{-- BODY --}}
                        <div class="p-6 text-center">

                            <div class="bg-slate-100 border border-slate-200 rounded-xl py-3 px-4 mb-4">

                                <h3 class="font-black uppercase text-slate-800">
                                    {{ $child->jabatan }}
                                </h3>

                                @if($child->bidang)
                                    <p class="text-sm text-slate-500 mt-1">
                                        {{ $child->bidang }}
                                    </p>
                                @endif

                            </div>

                            <h4 class="text-xl font-bold text-slate-800">
                                {{ $child->nama }}
                            </h4>

                            <p class="text-slate-500 mt-1 text-sm">
                                NIP. {{ $child->nip }}
                            </p>

                        </div>

                        {{-- KHUSUS KABID --}}
                        @if($child->jabatan == 'Kabid')

                            @php
                                $anggota = $child->children
                                    ->where('jabatan', 'Staff');
                            @endphp

                            @if($anggota->count())

                                <div class="border-t bg-slate-50 px-5 py-4">

                                    <h5 class="font-bold text-slate-700 mb-4">
                                        Anggota Bidang
                                    </h5>

                                    <div class="space-y-3">

                                        @foreach($anggota as $staff)

                                            <div class="bg-white border border-slate-200 rounded-xl px-4 py-3 shadow-sm">

                                                <div class="grid grid-cols-[140px_20px_1fr] items-center text-sm">

                                                    <div class="font-semibold text-slate-800 truncate">
                                                        {{ $staff->nama }}
                                                    </div>

                                                    <div class="text-center text-slate-300">
                                                        |
                                                    </div>

                                                    <div class="text-slate-500">
                                                        {{ $staff->bidang }}
                                                    </div>

                                                </div>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            @endif

                        @endif

                        {{-- KHUSUS SUBBAG --}}
                        @if($child->jabatan == 'Subbag')

                            @php
                                $staffSubbag = $child->children
                                    ->where('jabatan', 'Staff');
                            @endphp

                            @if($staffSubbag->count())

                                <div class="border-t bg-slate-50 px-5 py-4">

                                    <h5 class="font-bold text-slate-700 mb-4">
                                        Staff Subbag
                                    </h5>

                                    <div class="space-y-3">

                                        @foreach($staffSubbag as $staff)

                                            <div class="bg-white border border-slate-200 rounded-xl px-4 py-3 shadow-sm text-sm font-medium text-slate-700">

                                                {{ $staff->nama }}

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            @endif

                        @endif

                    </div>

                    {{-- CHILD --}}
                    @php
                        $subPimpinan = $child->children
                            ->where('jabatan', '!=', 'Staff');
                    @endphp

                    @if($subPimpinan->count())

                        @include('tree', [
                            'children' => $subPimpinan
                        ])

                    @endif

                </div>

            @endif

        @endforeach

    </div>

</div>