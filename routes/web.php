<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index'])->name('search.index');

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

// Laravel Blade Learning Routes
Route::get('/greeting', [App\Http\Controllers\LearnController::class, 'greeting'])->name('greeting');

Route::get('/daftar-siswa', [App\Http\Controllers\LearnController::class, 'daftarSiswa'])->name('daftar-siswa');

Route::get('/dashboard/profile', [App\Http\Controllers\LearnController::class, 'profile'])->name('dashboard.profile');

Route::get('/hasil-ujian/{nilai?}', [App\Http\Controllers\LearnController::class, 'hasilUjian'])->name('hasil-ujian');

Route::get('/products', [App\Http\Controllers\LearnController::class, 'products'])->name('products');

Route::get('/posts', [App\Http\Controllers\LearnController::class, 'posts'])->name('posts');

Route::get('/conditional', [App\Http\Controllers\LearnController::class, 'conditional'])->name('conditional');

Route::get('/looping', [App\Http\Controllers\LearnController::class, 'looping'])->name('looping');

Route::get('/components', [App\Http\Controllers\LearnController::class, 'components'])->name('components');

Route::get('/layout', [App\Http\Controllers\LearnController::class, 'layout'])->name('layout');

Route::get('/data-passing', [App\Http\Controllers\LearnController::class, 'dataPassing'])->name('data-passing');

Route::get('/form', [App\Http\Controllers\LearnController::class, 'form'])->name('form');

Route::post('/submit-form', [App\Http\Controllers\LearnController::class, 'submitForm'])->name('submit-form');

Route::get('/validation', [App\Http\Controllers\LearnController::class, 'validation'])->name('validation');

Route::post('/submit-validation', [App\Http\Controllers\LearnController::class, 'submitValidation'])->name('submit-validation');

Route::get('/search-results', [App\Http\Controllers\LearnController::class, 'searchResults'])->name('search-results');

Route::get('/pagination', [App\Http\Controllers\LearnController::class, 'pagination'])->name('pagination');

Route::get('/eloquent', [App\Http\Controllers\LearnController::class, 'eloquent'])->name('eloquent');

Route::get('/relationships', [App\Http\Controllers\LearnController::class, 'relationships'])->name('relationships');

Route::get('/accessors-mutators', [App\Http\Controllers\LearnController::class, 'accessorsMutators'])->name('accessors-mutators');

Route::get('/query-scopes', [App\Http\Controllers\LearnController::class, 'queryScopes'])->name('query-scopes');

Route::get('/events', [App\Http\Controllers\LearnController::class, 'events'])->name('events');

Route::get('/listeners', [App\Http\Controllers\LearnController::class, 'listeners'])->name('listeners');

Route::get('/middleware', [App\Http\Controllers\LearnController::class, 'middleware'])->name('middleware');

Route::get('/api', [App\Http\Controllers\LearnController::class, 'api'])->name('api');

Route::get('/testing', [App\Http\Controllers\LearnController::class, 'testing'])->name('testing');

Route::get('/deployment', [App\Http\Controllers\LearnController::class, 'deployment'])->name('deployment');

Route::get('/security', [App\Http\Controllers\LearnController::class, 'security'])->name('security');

Route::get('/performance', [App\Http\Controllers\LearnController::class, 'performance'])->name('performance');

Route::get('/caching', [App\Http\Controllers\LearnController::class, 'caching'])->name('caching');

Route::get('/queues', [App\Http\Controllers\LearnController::class, 'queues'])->name('queues');

Route::get('/notifications', [App\Http\Controllers\LearnController::class, 'notifications'])->name('notifications');

Route::get('/broadcasting', [App\Http\Controllers\LearnController::class, 'broadcasting'])->name('broadcasting');