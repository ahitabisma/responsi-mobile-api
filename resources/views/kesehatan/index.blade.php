@extends('layout.main')

@section('content')
    <div>
        <h2 class="text-xl font-bold mb-4">Aplikasi Manajemen Kesehatan</h2>

        <ul class="menu menu-lg bg-base-200 rounded-box w-full">
            @foreach ($table as $item)
                <li>
                    <a href="{{ route('kesehatan.' . $item->nama_tabel) }}">{{ $item->digit_puluhan }}. {{ $item->nama_tabel }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
