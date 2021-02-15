<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;

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

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user/profile-information', [ProfileInformationController::class, 'edit'])
        ->name('user-profile-information.edit');

    Route::get('user/password', [PasswordController::class, 'edit'])
        ->name('user-password.edit');
});

Route::middleware('can:access-admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', AdminIndexController::class)->name('index');

        //
    });
