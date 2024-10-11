<div>
    <label class="input input-bordered flex items-center gap-2">
        <input type="text" class="grow" placeholder="Masukin NIM" wire:model.defer="nim" wire:keydown.enter="cari" />
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
            <path fill-rule="evenodd"
                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                clip-rule="evenodd" />
        </svg>
    </label>

    <div class="mt-5">
        <button wire:click="resetFields" class="btn btn-sm mr-5">Reset</button>
        <button wire:click="cari" class="btn btn-sm">Cari</button>
    </div>

    {{-- Loading --}}
    <div class="mt-2" wire:loading>
        Loading...
    </div>

    @if ($error)
        <div class="text-red-500 mt-2">{{ $error }}</div>
    @endif

    @if ($hasil !== '')
        <div class="mt-3">
            <p>Hasil Modulo NIM : {{ $hasil }}</p>
            @if ($last_nim !== '')
                <p>3 digit terakhir : {{ $last_nim }}</p>
            @endif
        </div>

        {{-- Segment Satu --}}
        <p class="mt-3">Segment Satu</p>
        @if (!empty($segment_satu))
            <div>
                <p>Paket : {{ $segment_satu['paket'] }}</p>
                <p>Jenis Aplikasi : {{ $segment_satu['jenis_aplikasi'] }}</p>
            </div>
        @endif

        {{-- Segment Dua --}}
        <p class="mt-3">Segment Dua</p>
        @if (!empty($segment_dua))
            <div>
                <p>Digit Puluhan : {{ $segment_dua['digit_puluhan'] }}</p>
                <p>Nama Tabel : {{ $segment_dua['nama_tabel'] }}</p>
                <p>Kolom 1 : {{ $segment_dua['kolom_1'] }}</p>
                <p>Kolom 2 : {{ $segment_dua['kolom_2'] }}</p>
                <p>Kolom 3 : {{ $segment_dua['kolom_3'] }}</p>
                <p>Kolom 4 : {{ $segment_dua['kolom_4'] }}</p>
            </div>
        @endif

        {{-- Segment Tiga --}}
        <p class="mt-3">Segment Tiga</p>
        @if (!empty($segment_tiga))
            <div>
                <p>Digit Satuan : {{ $segment_tiga['digit_satuan'] }}</p>
                <p>Kustomisasi Tampilan UI : {{ $segment_tiga['kustomisasi'] }}</p>
            </div>
        @endif
    @endif
</div>
