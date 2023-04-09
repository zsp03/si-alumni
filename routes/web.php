<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', \App\Http\Controllers\HomeController::class)->name('home');
    Route::get('/lowongan', function () {
        return view('lowongan');
    })->name('lowongan');
    Route::get('/event', function () {
        return view('event');
    })->name('event');
    Route::get('/lowongan/1', function () {
        return view('loker');
    })->name('loker');
    Route::get('/database', function () {
        return view('database');
    })->name('database');
    Route::get('/newsletter', function () {
        return view('newsletter');
    })->name('newsletter');
});
