<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/gojo', function () {
    echo "Gojo Satoru is the strongest sorcerer in the world! Yeahhhh!";
});

Route::get('/profil', function () {
    return response()->json([
        'nama' => 'Gojo Satoru',
        'pekerjaan' => 'Sorcerer',
        'kekuatan' => 'Domain Expansion: Infinite Void'
    ]);
});

Route::get('/tentang', [PageController::class, 'about']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/redirect', function () {
    return redirect('/home');
});

Route::get('/blog/{slug}', function ($slug) {
    return "Judul Artikel: " . $slug;
});

Route::get('/customer/{id?}', function ($id = 'Guest') {
    return "Customer: " . $id;
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
})->where('id', '[A-Z]{2}[0-9]{3}');

Route::get('/invoice/{id}', function ($id) {
    return "Invoice ID: " . $id;
})->whereNumber('id');

Route::prefix('api')->namespace('App\Http\Controllers\Api')->middleware('auth')->group(function () {
    Route::get('products', function () {
        return "Daftar Produk";
    });

    Route::get('orders', function () {
        return "Daftar Pesanan";
    });
});

Route::get('/profile/{id}', function ($id) {
    return "Profil pengguna ID: " . $id;
})->name('profile');

Route::get('/dashboard', function () {
    return "Halaman Dashboard";
})->name('dashboard');

Route::get('/login', function () {
    return "Silakan login terlebih dahulu untuk mengakses API.";
})->name('login');

Route::get('/redirect-dashboard', function () {
    return redirect()->route('dashboard');
});

Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('orders', \App\Http\Controllers\OrderController::class);
Route::resource('posts', \App\Http\Controllers\PostController::class);