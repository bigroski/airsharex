<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use Bigroski\Tukicms\App\Http\Controllers\SiteController;
use App\Http\Controllers\AirportController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/testPage', [StaticController::class, 'testPage']);
Route::get('/blog', [StaticController::class, 'blog']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AirportController::class)->prefix('admin/airports')->group(function () {
    Route::get('/', 'index')->name('web.airports.index');
    Route::get('/create', 'create')->name('web.airports.create');
    Route::post('/store', 'store')->name('web.airports.store');
    Route::get('/{id}/edit', 'edit');
    Route::put('/update', 'updateCompanyDetails')->name('airports.update');
    Route::get('/{id}', 'show');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::any('{slug}', [SiteController::class, 'page'])->where('slug', '[0-9,a-z,/]+')->middleware('web');



