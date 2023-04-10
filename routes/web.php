<?php

use App\Http\Livewire\Admin\Auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard\Index;

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
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    // ...
    // Route::get('auth/{provider}/redirect', [SocialiteController::class, 'loginSocial'])
    //     ->name('socialite.auth');
 
    // Route::get('auth/{provider}/callback', [SocialiteController::class, 'callbackSocial'])
    //     ->name('socialite.callback');
});

Route::get('/', Index::class)->name('dashboard.index');


