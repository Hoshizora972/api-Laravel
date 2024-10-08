<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// utilisateur non connecter
Route::get('/', function () {
    return view('welcome');
});

// utilisateur connecter et verifier
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// utilisateur connecter et verifier
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// création de la route pour afficher la page contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

require __DIR__.'/auth.php';
