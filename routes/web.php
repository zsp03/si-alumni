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
    Route::get('/messages', function () {
        return view('pages.messages.show');
    })->name('messages');
    Route::get('/event', function () {
        return view('pages.event.index');
    })->name('event');
    Route::get('/event/tags/{tags}', \App\Http\Livewire\IndexPostByTags::class)->name('eventByTags');
    Route::get('/event/post/{post:slug}', \App\Http\Livewire\ShowPost::class)->name('post.show');
    Route::get('/database', function () {
        return view('pages.database.index');
    })->name('database');
    Route::get('/newsletter', function () {
        return view('pages.newsletter.index');
    })->name('newsletter');
});
