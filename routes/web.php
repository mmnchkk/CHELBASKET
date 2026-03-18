<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Route::get('/', function () {
//     return view('welcome')->with('success', 'User created successfully!');
// });

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/new-collection', function () {
    return view('new-collection');
})->name('new-collection');

Route::get('/registration', function () {
    return view('registration');
})->middleware('guest')->name('registration');

Route::get('/autorisation', function () {
    return view('autorisation');
})->middleware('guest')->name('autorisation');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/balls', function () {
    $products = Product::all();
    return view('balls', compact('products'));
})->name('balls');


Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::get('/basket', function () {
    return view('basket');
})->name('basket');

Route::get('/card', function () {
    return view('card');
})->name('card');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
