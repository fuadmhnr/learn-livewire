<?php

use App\Livewire;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', Livewire\Home::class)->name('home');
    Route::get('/about', Livewire\About::class)->name('about');
    Route::get('/contact', Livewire\Contact::class)->name('contact');
    Route::get('/posts', Livewire\Posts\Index::class)->name('posts.index');
    Route::get('/users/{user}', Livewire\Users\Show::class)->name('users.show');
});

Route::get('/login', Login::class)->name('login');
