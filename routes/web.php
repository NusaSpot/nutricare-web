<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteLoginController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login/google', [SocialiteLoginController::class, 'redirectToProvider']);
Route::get('/login/google/callback', [SocialiteLoginController::class, 'handleProviderCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::put('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');

    Route::get('/activity', [ActivityController::class, 'index'])->name('activity.index');
    Route::post('/activity', [ActivityController::class, 'store'])->name('activity.store');
    Route::get('/activity/{activityId}', [ActivityController::class, 'detail'])->name('activity.detail');
    Route::get('/activity-delete/{activityId}', [ActivityController::class, 'delete'])->name('activity.delete');
});

require __DIR__.'/auth.php';
