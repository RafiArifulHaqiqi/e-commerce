<?php

Route::get('/', function () {
    return 'Halaman Utama';
});

Route::get('/produk', function () {
    return 'Halaman Produk';
});

Route::get('/produk/{id}', function ($id) {
    return "Halaman Detail Produk dengan ID: $id";
});

Route::get('/keranjang', function () {
    return 'Halaman Keranjang Belanja';
});

Route::get('/checkout', function () {
    return 'Halaman Checkout';
});

Route::get('/login', function () {
    return 'Halaman Login';
});

Route::get('/register', function () {
    return 'Halaman Registrasi';
});

Route::get('/profil', function () {
    return 'Halaman Profil Pengguna';
});

// use Illuminate\Support\Facades\Route;
// use Livewire\Volt\Volt;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
