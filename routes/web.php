<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use Bigroski\Tukicms\App\Http\Controllers\SiteController;
use App\Http\Controllers\OnlineBookingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PenController;

use Bigroski\Tukicms\App\Http\Middleware\TukiAccessMiddleware;


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
Route::get('/blog/detail/{id}', [StaticController::class, 'blogDetail'])->name('blogDetail');
Route::get('/signup', [StaticController::class, 'signup']);
Route::get('/htmlregister', [StaticController::class, 'register']);
Route::get('/history', [StaticController::class, 'history']);
Route::get('/ourstory', [StaticController::class, 'ourstory']);
Route::get('/contact', [StaticController::class, 'contact']);
Route::get('/policy', [StaticController::class, 'policy']);
Route::get('/disclaimer', [StaticController::class, 'disclaimer']);
Route::get('/gallery', [StaticController::class, 'gallery']);
Route::prefix("admin")->middleware(
    [
        'web',
        'auth',
        TukiAccessMiddleware::class
    // 'auth:web',
    // config('jetstream.auth_session'),
    // 'verified'
    ]
)->group( function () {
    Route::resource('onlineBooking', OnlineBookingController::class, ['as' => 'web']);
    Route::resource('book', BookController::class, ['as' => 'web']);
    Route::resource('pen', PenController::class, ['as' => 'web']);
	
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('/', [SiteController::class, 'page']);
Route::any('{slug}', [SiteController::class, 'page']);
