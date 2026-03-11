<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('success', 'User created successfully!');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/new-collection', function () {
    return view('new-collection');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/autorisation', function () {
    return view('autorisation');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
