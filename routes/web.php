<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use Bigroski\Tukicms\App\Http\Controllers\SiteController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\VendorController;

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
Route::get('/home', [StaticController::class, 'home']);
Route::get('/about', [StaticController::class, 'about']);
Route::get('/services', [StaticController::class, 'services']);
Route::get('/blog', [StaticController::class, 'blog']);
Route::get('/signup', [StaticController::class, 'signup']);
Route::get('/htmlregister', [StaticController::class, 'register']);
Route::get('/history', [StaticController::class, 'history']);
Route::get('/ourstory', [StaticController::class, 'ourstory']);
Route::get('/contact', [StaticController::class, 'contact']);
Route::get('/policy', [StaticController::class, 'policy']);
Route::get('/disclaimer', [StaticController::class, 'disclaimer']);
Route::get('/gallery', [StaticController::class, 'gallery']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::controller(AirportController::class)->prefix('admin/airports')->group(function () {
//     Route::get('/', 'index')->name('web.airport.index');
//     Route::get('/create', 'create')->name('web.airport.create');
//     Route::post('/store', 'store')->name('web.airport.store');
//     Route::get('/{id}/edit', 'edit');
//     Route::put('/update', 'updateCompanyDetails')->name('airport.update');
//     Route::get('/{id}', 'show');
// });
Route::resource('admin/airports', AirportController::class, ['as' => 'web']);
Route::resource('admin/vendors', VendorController

::class, ['as' => 'web']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('/', [SiteController::class, 'page']);
Route::any('{slug}', [SiteController::class, 'page']);
Route::any('{slug}', [SiteController::class, 'page'])->where('slug', '[0-9,a-z,/]+')->middleware('web');



