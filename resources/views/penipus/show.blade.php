<!-- resources/views/penipus/show.blade.php -->

@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detail Penipu</h1>
    <div class="bg-white p-6 rounded shadow">
        <div class="mb-4">
            <label class="block text-gray-700">Nama:</label>
            <p class="text-lg">{{ $penipu->nama }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Alamat:</label>
            <p class="text-lg">{{ $penipu->alamat }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Telepon:</label>
            <p class="text-lg">{{ $penipu->telepon }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email:</label>
            <p class="text-lg">{{ $penipu->email }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Keterangan:</label>
            <p class="text-lg">{{ $penipu->keterangan }}</p>
        </div>
        <a href="{{ route('penipus.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Kembali</a>
    </div>
</div>
@endsection
