<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/clear-session', function () {
    session()->flush();
    return 'Session cleared';
});

Route::get('/', [ExtraController::class, 'homepage'])->name('home');
Route::post('/contact-shore', [ExtraController::class, 'contact'])->name('contact.store');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get(
    '/terms',
    action: function () {
        return view('pages.terms');
    },
)->name('terms');

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

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::resource('cart', CartController::class);
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::resource('order', OrderController::class);

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/subscribe', [ExtraController::class, 'subscribe'])->name('subscribe');
Route::get('/checkout', [ExtraController::class, 'checkout'])->name('checkout');
Route::post('/currency/convert', [CurrencyController::class, 'convert'])->name('currency.convert');
Route::post('/shipping_cost', [ExtraController::class, 'getCost'])->name('shipping_cost');

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

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/flutterwave/pay', [App\Http\Controllers\FlutterwavePaymentController::class, 'index'])->name('flutterwave.index');
Route::post('/flutterwave/pay', [App\Http\Controllers\FlutterwavePaymentController::class, 'initiatePayment'])->name('flutterwave.pay');
Route::get('/flutterwave/callback', [App\Http\Controllers\FlutterwavePaymentController::class, 'handleCallback'])->name('flutterwave.callback');

Route::get('/set-currency/{code}', [CurrencyController::class, 'setCurrency'])->name('set.currency');
Route::middleware(['auth'])
    ->prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('/', [ExtraController::class, 'dashboard'])->name('index');
        Route::resource('product', ProductController::class);
        Route::resource('variant', ProductVariantController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('size', SizeController::class);
        Route::resource('color', ColorController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('brand', BrandController::class);
        Route::resource('comment', CommentController::class);
        Route::resource('currency', CurrencyController::class);
        Route::resource('media', MediaController::class)->parameters(['media' => 'media']);
        Route::resource('subscribe', SubscribeController::class);
        Route::resource('order', OrderController::class);
        Route::post('/order/{order}/approve', [OrderController::class, 'approve'])->name('order.approve');
        Route::resource('tag', TagController::class);
    });
require __DIR__ . '/auth.php';
