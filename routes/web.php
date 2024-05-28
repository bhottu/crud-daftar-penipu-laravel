<?php

use App\Http\Controllers\PenipuController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    $penipus = \App\Models\Penipu::paginate(10); // Atur jumlah item per halaman di sini
    return view('welcome', compact('penipus'));
});

// Route untuk resource penipu dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::resource('penipus', PenipuController::class);
});

// Route untuk autentikasi
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
