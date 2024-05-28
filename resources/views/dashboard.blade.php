@extends('layouts.app')
@vite('resources/css/app.css')
@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <p>Welcome to your dashboard!</p>
        <a href="{{ route('penipus.index') }}" class="text-blue-500 hover:text-blue-700">Manage Penipu</a>
    </div>
</div>
@endsection
