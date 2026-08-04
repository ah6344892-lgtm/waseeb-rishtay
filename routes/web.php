<?php

use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Profiles;
use App\Livewire\Frontend\ProfileDetail;
use App\Livewire\Frontend\Contact;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::get('/', Home::class)/*->middleware('auth')*/->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/profiles', Profiles::class)->name('profiles');
Route::get('/profile/{slug}', ProfileDetail::class)->name('profile');
Route::get('/contact', Contact::class)->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
