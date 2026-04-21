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

Route::get('/', function () { return redirect('/home'); });

Route::get('/redirect', function () { return redirect('/home'); });

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

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search');

Route::get('/search/results', [\App\Http\Controllers\SearchController::class, 'results'])->name('search.results');

Route::get('/search/advanced', [\App\Http\Controllers\SearchController::class, 'advanced'])->name('search.advanced');

Route::get('/search/advanced/results', [\App\Http\Controllers\SearchController::class, 'advancedResults'])->name('search.advanced.results');

Route::get('/search/suggestions', [\App\Http\Controllers\SearchController::class, 'suggestions'])->name('search.suggestions');

Route::get('/search/history', [\App\Http\Controllers\SearchController::class, 'history'])->name('search.history');

Route::get('/search/trending', [\App\Http\Controllers\SearchController::class, 'trending'])->name('search.trending');

Route::get('/search/filters', [\App\Http\Controllers\SearchController::class, 'filters'])->name('search.filters');

Route::get('/latihan1', function () {
    return view('latihan1', [
        'nama' => 'Gojo Satoru',
        'nilai' => [85, 90, 78]
    ]);
});

Route::get('/users', [App\Http\Controllers\UserController::class, 'users']);
