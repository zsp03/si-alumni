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

Route::redirect('/','login');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function ()
    {return view('home');})->name('home');
    Route::get('/lowongan', function ()
    {return view('lowongan');})->name('lowongan');
    Route::get('/event', function ()
    {return view('event');})->name('event');
    Route::get('/lowongan/1', function ()
    {return view('loker');})->name('loker');
    Route::get('/database', function ()
    {return view('database');})->name('database');
    Route::get('/newsletter', function ()
    {return view('newsletter');})->name('newsletter');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
