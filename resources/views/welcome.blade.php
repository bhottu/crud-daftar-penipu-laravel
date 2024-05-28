@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
<link rel="stylesheet" href="path/to/app.css">


<div class="container mx-auto px-6 py-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        @auth
        <h1 class="text-2xl font-bold mb-4">Selamat Datang, {{ auth()->user()->name }}!</h1>
        <p>Ini adalah halaman daftar penipu tanaman hias!</p>
        @else
        <h1 class="text-2xl font-bold mb-4">Selamat Datang</h1>
        <p>Silakan login untuk mengirim daftar scammer.</p>
        @endauth

        @guest
        <div class="mt-4">
            <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-800">Login</a>
            <span class="mx-2 text-gray-400">|</span>
            <a href="{{ route('register') }}" class="text-sm text-gray-600 hover:text-gray-800">Register</a>
        </div>
        @else
        <div class="mt-4">
            <a href="/penipus" class="text-sm text-gray-600 hover:text-gray-800">Manage</a>
            <span class="mx-2 text-gray-400">|</span>
            <a href="{{ route('logout') }}" class="text-sm text-red-600 hover:text-gray-800"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
        </div>
        @endguest
    </div>
</div>

<!-- resources/views/welcome.blade.php -->


<div class="container mx-auto px-6 py-2">
    

        <div class="mt-4">
            <h2 class="text-lg font-bold mb-2">Daftar Penipu:</h2>

            <div class="overflow-x-auto mt-8">
            <table class="bg-white w-full table-auto">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2 w-1/12 w-auto">No</th>
            <th class="px-4 py-2">Nama</th>
            <th class="px-4 py-2">Telepon</th>
            <th class="px-4 py-2">Detil</th>
        </tr>
    </thead>
    <tbody>
        @php
            $startIndex = $penipus->firstItem(); // Mendapatkan nomor urut dari data pertama yang ditampilkan
        @endphp

        @foreach ($penipus as $penipu)
        <tr>
            <td class="border px-4 py-2 w-1/12 w-auto">{{ $loop->iteration + $startIndex - 1 }}</td>
            <td class="border px-4 py-2">{{ $penipu->nama }}</td>
            <td class="border px-4 py-2">{{ $penipu->telepon }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('penipus.show', $penipu) }}" class="bg-green-500 text-white px-2 py-1 rounded">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

        <br>{{ $penipus->links() }}

        </div>
        </div>
    
    <br>
</div>

@endsection
@vite('resources/js/app.js')