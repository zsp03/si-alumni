<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/event', function () {
    return view('event');
})->middleware(['auth', 'verified'])->name('event');

Route::get('/event', function () {
    return view('event');
})->middleware(['auth', 'verified'])->name('event');

Route::get('/event/1', function () {
    return view('loker');
})->middleware(['auth', 'verified'])->name('loker');

Route::get('/database', function () {
    return view('database');
})->middleware(['auth', 'verified'])->name('database');

Route::get('/newsletter', function () {
    return view('newsletter');
})->middleware(['auth', 'verified'])->name('newsletter');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
