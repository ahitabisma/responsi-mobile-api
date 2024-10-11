<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('favicon_praktikum.jpg') }}" type="image/x-icon" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsi Praktikum Mobile</title>

    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body>
    {{-- Navbar --}}
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="{{ route('home') }}">Segment</a></li>
                    <li><a href="{{ route('user') }}">User</a></li>
                    <li><a href="{{ route('buku') }}">Buku</a></li>
                    <li><a href="{{ route('kesehatan') }}">Kesehatan</a></li>
                    <li><a href="{{ route('keuangan') }}">Keuangan</a></li>
                    <li><a href="{{ route('pariwisata') }}">Pariwisata</a></li>
                    {{-- <li>
                        <a>Parent</a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">Praktikum Mobile</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Segment</a></li>
                <li><a href="{{ route('user') }}">User</a></li>
                <li><a href="{{ route('buku') }}">Buku</a></li>
                <li><a href="{{ route('kesehatan') }}">Kesehatan</a></li>
                <li><a href="{{ route('keuangan') }}">Keuangan</a></li>
                <li><a href="{{ route('pariwisata') }}">Pariwisata</a></li>
                {{-- <li>
                    <details>
                        <summary>Parent</summary>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li> --}}
            </ul>
        </div>
        <div class="navbar-end">
            {{-- <a class="btn">Button</a> --}}
        </div>
    </div>

    {{-- Content --}}
    <div class="mx-6 md:mx-16 my-8">
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
