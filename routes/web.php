<?php

use App\Livewire\Frontend\About;
use App\Livewire\Frontend\Home;
use App\Livewire\Frontend\Profiles;
use App\Livewire\Frontend\ProfileDetail;
use App\Livewire\Frontend\Contact;
use App\Livewire\Admin\Dashboard;

use App\Livewire\Admin\Users\Index as UserIndex;
use App\Livewire\Admin\Users\Create as UserCreate;
use App\Livewire\Admin\Users\Edit as UserEdit;

use App\Livewire\Admin\Profiles\Index as ProfileIndex;
use App\Livewire\Admin\Profiles\Create as ProfileCreate;
use App\Livewire\Admin\Profiles\Edit as ProfileEdit;

use App\Livewire\Admin\Roles\Index as RoleIndex;
use App\Livewire\Admin\Permissions\Index as PermissionIndex;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome')->name('home');

Route::get('/', Home::class)/*->middleware('auth')*/->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/profiles', Profiles::class)->name('profiles');
Route::get('/profile/{profile_id}', ProfileDetail::class)->name('profile_detail');
Route::get('/contact', Contact::class)->name('contact');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth',
    'verified',
    // 'role:Super Admin|Admin',
])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Users
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', UserIndex::class)->name('index');
        Route::get('/create', UserCreate::class)->name('create');
        Route::get('/{user}/edit', UserEdit::class)->name('edit');
    });

    // Profiles
    Route::prefix('profiles')->name('profiles.')->group(function () {
        Route::get('/', ProfileIndex::class)->name('index');
        Route::get('/create', ProfileCreate::class)->name('create');
        Route::get('/{profile}/edit', ProfileEdit::class)->name('edit');
    });

    // Roles
    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('/', RoleIndex::class)->name('index');
    });

    // Permissions
    Route::prefix('permissions')->name('permissions.')->group(function () {
        Route::get('/', PermissionIndex::class)->name('index');
    });
});

require __DIR__ . '/settings.php';
