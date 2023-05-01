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
    Route::get('/home', function () {
        return view('pages.home');
    })->name('home');
    Route::get('/jobs', function () {
        return view('pages.jobs.index');
    })->name('lowongan');
    Route::get('/jobs/1', function () {
        return view('pages.jobs.show');
    })->name('jobs-post');
    Route::get('/event', function () {
        return view('pages.event.index');
    })->name('event');
    Route::get('/event/1', function () {
        return view('pages.event.show');
    })->name('event-post');
    Route::get('/event/{slug}', \App\Http\Livewire\ShowPost::class);
    Route::get('/database', function () {
        return view('pages.database.index');
    })->name('database');
    Route::get('/newsletter', function () {
        return view('pages.newsletter.index');
    })->name('newsletter');
});
