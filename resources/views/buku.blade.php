@extends('layout.main')

@section('content')
    <div>
        <h2 class="text-xl font-bold mb-4">Aplikasi Manajemen Buku</h2>

        <ul class="menu menu-lg bg-base-200 rounded-box w-full">
            @foreach ($table as $item)
                <li>
                    <a>{{ $item->digit_puluhan }}. {{ $item->nama_tabel }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
