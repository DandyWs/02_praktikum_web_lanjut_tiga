<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Nomer 1
Route::get('/', function () {
    echo "SElamat Datang di Halaman Utama";
});

// Nomer 2
Route::prefix('/products')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return 'Halaman marbel-edu-games';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return 'Halaman marbel-and-friends-kids-games';
    });
    Route::get('/riri-story-books', function () {
        return 'Halaman riri-story-books';
    });
    Route::get('/kolak-kids-songs', function () {
        return 'Halaman kolak-kids-songs';
    });
});

// Nomer 3
Route::get('/news/{title?}', function ($title=null) {
    return $title;
});

// Nomer 4
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return 'mHalaman Karir';
    });
    Route::get('/magang', function () {
        return 'Halaman Magang';
    });
    Route::get('/kunjungan-industri', function () {
        return 'Halaman Kunjungan Industri';
    });
});

// Nomer 5
Route::get('/about', function () {
    echo "Selamat Datang di Halaman About Us";
});

// Nomer 6
Route::resource('/contact-us', ContactController::class)->only('index');