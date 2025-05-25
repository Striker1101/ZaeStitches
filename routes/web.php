<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [ExtraController::class, 'homepage'])->name('home');
Route::post('/contact-shore', [ExtraController::class, 'contact'])->name('contact.store');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/currency-detect', function () {
    $response = Http::get('https://ipapi.co/currency/');
    return $response->body();
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
})->name('wishlist');


Route::get('/search', function () {
    return view('pages.search');
})->name('search');



Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/subscribe', [ExtraController::class, 'subscribe'])->name('subscribe');


Route::get('/shop', [ProductController::class, 'pageIndex'])->name('shop');
Route::get('/shop/{product}', [ProductController::class, 'pageShow'])->name('shop.show');


Route::get('/blog', [BlogController::class, 'pageIndex'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'pageShow'])->name('blog.show');

Route::get('/about_us', function () {
    return view('pages.about');
})->name('about_us');

Route::get('/terms-conditions', function () {
    return view('pages.wishlist');
})->name('terms-conditions');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::resource('blog', BlogController::class);
    });

require __DIR__ . '/auth.php';
