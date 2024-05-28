<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Daftar Penipu Tanaman Hias') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow mb-4">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-800">
                            {{ config('app.name', 'Daftar Penipu Tanaman Hias') }}
                        </a>
                    </div>
                    <div>
                        @guest
                            <a href="{{ route('login') }}" class="text-gray-800 mr-4">Login</a>
                            <a href="{{ route('register') }}" class="text-gray-800">Register</a>
                        @else
                            <a href="{{ route('dashboard') }}" class="text-gray-800 mr-4">Dashboard</a>
                            <a href="{{ route('logout') }}" class="text-gray-800"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <main class="container mx-auto px-6">
            @yield('content')
        </main>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
