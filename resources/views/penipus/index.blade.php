<!-- resources/views/penipus/index.blade.php -->

@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')

<div class="container mx-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Manage</h1>
        <a href="{{ route('penipus.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah</a>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 my-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto mt-8">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="sm:w-auto px-4 py-2 whitespace-nowrap">No</th>
                        <th class="sm:w-auto px-4 py-2 whitespace-nowrap">Nama</th>
                        <th class="sm:w-auto px-4 py-2">Alamat</th>
                        <th class="sm:w-auto px-4 py-2">Telepon</th>
                        <th class="sm:w-auto px-4 py-2">Email</th>
                        <th class="sm:w-auto px-4 py-2">Keterangan</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $startIndex = $penipus->firstItem(); // Mendapatkan nomor urut dari data pertama yang ditampilkan
                    @endphp

                    @foreach ($penipus as $penipu)
                    <tr>
                        <td class="border px-4 py-2 whitespace-nowrap">{{ $loop->iteration + $startIndex - 1 }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap overflow-hidden max-w-xs lg:max-w-none">{{ $penipu->nama }}</td>
                        <td class="border px-4 py-2 whitespace-nowrap overflow-hidden max-w-xs"><div class="truncate" style="max-width: 200px;">{{ $penipu->alamat }}</div></td>
                        <td class="border px-4 py-2">{{ $penipu->telepon }}</td>
                        <td class="border px-4 py-2">{{ $penipu->email }}</td>
                        <td class="border px-4 py-2"><div class="truncate" style="max-width: 200px;">{{ $penipu->keterangan }}</div></td>
                        <td class="border px-4 py-2 whitespace-nowrap">
                            <div class="flex justify-center">
                                <a href="{{ route('penipus.show', $penipu) }}" class="bg-green-500 text-white px-2 py-1 rounded flex items-center">View</a>
                                <a href="{{ route('penipus.edit', $penipu) }}" class="bg-yellow-500 text-white px-2 py-1 rounded flex items-center ml-2">Edit</a>
                                <a href="#" onclick="if(confirm('Apakah Anda yakin ingin menghapus item ini?')) { event.preventDefault(); document.getElementById('delete-form-{{ $penipu->id }}').submit(); }" class="bg-red-500 text-white px-2 py-1 rounded flex items-center ml-2">Delete</a>
                                <form id="delete-form-{{ $penipu->id }}" action="{{ route('penipus.destroy', $penipu) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
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
