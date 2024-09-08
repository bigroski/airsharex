<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use Bigroski\Tukicms\App\Http\Controllers\SiteController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VendorController;
use Bigroski\Tukicms\App\Http\Middleware\TukiAccessMiddleware;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MailingListController;
use App\Http\Controllers\OnlineBookingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PenController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CitizenshipController;
use App\Http\Controllers\TicketController;

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
// DONE
// Route::get('/home', [StaticController::class, 'home']);
Route::get('/about-static', [StaticController::class, 'about']);
Route::get('/ourstory', [StaticController::class, 'ourstory']);
Route::get('/contact-static', [StaticController::class, 'contact']);
Route::post('/contact', [StaticController::class, 'processContact'])->name('site.processContact');
Route::post('/comment/save', [StaticController::class, 'processComment'])->name('site.processComment');

Route::get('/policy', [StaticController::class, 'policy']);
Route::get('/disclaimer-static', [StaticController::class, 'disclaimer']);
Route::get('/news', [StaticController::class, 'news']);
Route::get('/news/{id}', [StaticController::class, 'newsdetail'])->name('site.news-detail');
Route::get('/news/category/{slug}', [StaticController::class, 'category'])->name('site.news-category');
Route::get('/news/tag/{slug}', [StaticController::class, 'tag'])->name('site.news-tag');
Route::get('/history-static', [StaticController::class, 'history']);
Route::post('/account/update', [StaticController::class, 'updateAccount'])->name('site.post.account');
// Route::get('/blog', [StaticController::class, 'blog']);
// Route::get('/blog/detail/{id}', [StaticController::class, 'blogDetail'])->name('blogDetail');
Route::get('/thank-you', [StaticController::class, 'thankyou']);
Route::get('/services', [StaticController::class, 'services']);
Route::get('/service-detail/{id}', [StaticController::class, 'servicesdetail'])->name('site.service-detail');
Route::get('/signup', [StaticController::class, 'signup'])->name('public.login');
Route::get('/registration', [StaticController::class, 'register'])->name('public.register');
Route::get('/forgetpassord', [StaticController::class, 'forgetpassord']);
Route::get('/emailverify', [StaticController::class, 'emailverify']);
Route::middleware(
    [
        'auth:web',
        // config('jetstream.auth_session'),
        // 'verified'
    ]
)->group( function () {
Route::get('/checkout', [StaticController::class, 'checkout'])->name('search.checkout');
Route::post('/customerCreate',[RegisteredUserController::class,'createCutomer']);
Route::get('/ticket', [TicketController::class, 'getTicket'])->name('ticket.search');

});

Route::get('/gallery', [StaticController::class, 'gallery']);
Route::get('/account', [StaticController::class, 'account']);
Route::post('/search', [StaticController::class, 'search'])->name('site.search');
Route::get('/search', [StaticController::class, 'search'])->name('site.search');
Route::get('/popular/{route_id}', [StaticController::class, 'popularRoute'])->name('site.popularRoute');

Route::get('/search/news', [StaticController::class, 'newsSearch'])->name('news.search');
Route::prefix("admin")->middleware(
    [
        'web',
        'auth',
        TukiAccessMiddleware::class
        // 'auth:web',
        // config('jetstream.auth_session'),
        // 'verified'
    ]
)->group(function () {
    // Route::resource('onlineBooking', OnlineBookingController::class, ['as' => 'web']);
    // Route::resource('book', BookController::class, ['as' => 'web']);
    // Route::resource('pen', PenController::class, ['as' => 'web']);
    // Route::resource('device', DeviceController::class, ['as' => 'web']);
});

Route::resource('citizenship', CitizenshipController::class, ['as' => 'web']);
//Register User

Route::post('/user/register', [RegisteredUserController::class, 'store'])->name('user.register');
Route::post('user/login', [AuthenticatedSessionController::class, 'store'])->name('user.login');
Route::post('/customer/register', [RegisteredUserController::class, 'createCutomer'])->name('customer.register');

Route::prefix("admin")->middleware(
    [
        'web',
        'auth',
        TukiAccessMiddleware::class
    ]
)->group(
    function () {
        Route::resource('service', ServiceController::class, ['as' => 'web']);
        Route::resource('airports', AirportController::class, ['as' => 'web']);
        Route::resource('vendors', VendorController::class, ['as' => 'web']);
        Route::resource('passengers', PassengerController::class, ['as' => 'web']);

        Route::resource('testimonials', TestimonialController::class, ['as' => 'web']);
        Route::resource('gallery', GalleryController::class, ['as' => 'web']);
        Route::resource('leadership', LeadershipController::class, ['as' => 'web']);
        Route::post('gallery/delete-image', [GalleryController::class, 'deleteImage']);
    }
);
Route::resource('mailing-list', MailingListController::class, ['as' => 'web']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
});
Route::middleware('auth')->group(function () {


    Route::controller(BookingController::class)->prefix('book-flight')->group(function () {
        Route::post('', 'bookFlight')->name('book.flight');
        Route::get('/test', 'test')->name('book.test');
        Route::post('/confirm', 'confirmBooking')->name('confirm.booking-flight');
        Route::get('/{ticketNo}/ticket', 'getTicketDetail')->name('flight.ticket');
        Route::get('/on-demand', 'flightOnDemand')->name('booking.ondemand');
        Route::post('/on-demand-store', 'flightOnDemandStore')->name('store.booking.ondemand');
        Route::post('/confirm', 'confirmBooking')->name('confirm.booking-flight');
    Route::post('/confirm-payment', 'redirectToPayment')->name('confirm.process-payment');

    });
});


require __DIR__ . '/auth.php';
Route::get('/', [SiteController::class, 'page']);
Route::any('{slug}', [SiteController::class, 'page']);
Route::any('{slug}', [SiteController::class, 'page'])->where('slug', '[0-9,a-z,/]+')->middleware('web');
