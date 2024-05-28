<!-- resources/views/penipus/edit.blade.php -->

@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Penipu</h1>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('penipus.update', $penipu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="nama" value="{{ $penipu->nama }}" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Alamat</label>
            <input type="text" name="alamat" value="{{ $penipu->alamat }}" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Telepon</label>
            <input type="text" name="telepon" value="{{ $penipu->telepon }}" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ $penipu->email }}" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Keterangan</label>
            <textarea name="keterangan" class="border rounded w-full py-2 px-3" required>{{ $penipu->keterangan }}</textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>
@endsection
