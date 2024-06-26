<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Artist;
use App\Http\Controllers\Art;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/removefromcart', [CartController::class, 'removeItem'])->name('removefromcart');

Route::post('/updatequantity', [CartController::class, 'updateQuantity'])->name('updatequantity');

Route::post('/addtocart', [CartController::class, 'addToCart'])->name('addtocart');

Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/add-artist', function () {
    return view('artist.add');
})->middleware(['auth', 'verified'])->name('artist.add');

Route::get('/artists', [Artist::class, 'index'])->name('artists');
Route::post('/add-artist', [Artist::class, 'addArtist'])->name('addArtist');

Route::get('/add-art', function () {
    return view('art.add');
})->middleware(['auth', 'verified'])->name('art.add');

Route::get('/all-art', [Art::class, 'index'])->name('all-art');
Route::post('/add-art', [Art::class, 'addArt'])->name('addArt');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
