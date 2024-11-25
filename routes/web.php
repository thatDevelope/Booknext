<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Middleware\MiddlewareGroup;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\ShortletController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DisplayController;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\RatingController;

use App\Http\Controllers\FlutterwavePaymentController;
use App\Http\Controllers\SubscriptionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'Index'])->name('home');
Route::get('/signup', [FrontendController::class, 'SignUp'])->name('signup');
Route::get('/hotels', [FrontendController::class, 'Hotels'])->name('hotels');
Route::get('/Events', [FrontendController::class, 'Eventdetails'])->name('eventdetails');
Route::get('/venue', [FrontendController::class, 'Venues'])->name('venues');
Route::get('/shortlet', [FrontendController::class, 'Shortlet'])->name('shortlets');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog', [FrontendController::class, 'Blog'])->name('blog');
Route::get('/agent', [FrontendController::class, 'agent'])->name('agent');
Route::post('/agentreg',[AgentController::class,'registerAgent'])->name('agent.register');
Route::get('/shortlet/{id}', [FrontendController::class, 'details'])->name('shortlet.details');
Route::get('/hotel/{id}', [FrontendController::class, 'details'])->name('hotel.details');
Route::get('/venue/{id}', [FrontendController::class, 'details'])->name('venue.details');
Route::post('/schedule-tour/{id}/{property_type}', [EmailController::class, 'scheduleTour'])->name('schedule.tour');
Route::post('/send-message/{id}/{property_type}', [EmailController::class, 'sendMessageToClient'])->name('send.message');
Route::post('/contact/send', [EmailController::class, 'sendContactForm'])->name('contact.send');
Route::post('/submit-rating', [RatingController::class, 'submitRating']);
Route::get('/payment', [FrontendController::class, 'payment'])->name('payment');




Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');



//flutter wave payment gateway

Route::get('/flutterwave/pay/', [FlutterwavePaymentController::class, 'index'])->name('flutterwave.index');
Route::post('/flutterwave/pay', [App\Http\Controllers\FlutterwavePaymentController::class, 'initiatePayment'])->name('flutterwave.pay');
Route::get('/flutterwave/callback', [App\Http\Controllers\FlutterwavePaymentController::class, 'handleCallback'])->name('flutterwave.callback');



Route::get('/dashboard', [DashboardController::class, 'redirectToDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route:: middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminContoller::class, 'AdminDashboard'])->name('admindash');


    Route::get('/admin/logout', [AdminContoller::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/Profile', [AdminContoller::class, 'AdminProfile'])->name('admin_profile');

    Route::post('/admin/Store', [AdminContoller::class, 'AdminStore'])->name('admin.store');
    Route::get('/admin/register', [AdminContoller::class, 'AdminRegister'])->name('admin_register');
    Route::get('/admin/email', [AdminContoller::class, 'AdminEmail'])->name('admin_email');
    Route::get('/admin/client', [AdminContoller::class, 'AdminClient'])->name('admin_client');
    Route::get('/admin/compose', [AdminContoller::class, 'AdminCompose'])->name('admin_compose');
    Route::post('/admin/email', [EmailController::class, 'adminEmail'])->name('admin.email');
    Route::get('/admin/venue', [AdminContoller::class, 'Venues'])->name('venues1');
    Route::get('/admin/hotels', [AdminContoller::class, 'Hotels'])->name('hotels2');
    Route::get('/admin/shortlet', [AdminContoller::class, 'Shortlet'])->name('shortlets3');
    Route::delete('/admin/venues/{id}', [AdminContoller::class, 'destroy'])->name('venues.destroy');
    Route::delete('/admin/shortlets/{id}', [AdminContoller::class, 'shortletdestroy'])->name('shortlets.destroy');
    Route::delete('/admin/hotels/{id}', [AdminContoller::class, 'hoteldestroy'])->name('hotels.destroy');
    Route::get('/admin/featured-properties', [AdminContoller::class, 'showFeaturedProperties'])->name('feature');
    Route::post('/admin/change-status/{id}', [AdminContoller::class, 'changePropertyStatus'])->name('status');
    Route::get('/admin/featured-venue/', [AdminContoller::class, 'showFeaturedVenue'])->name('features');
    Route::post('/admin/change-venue/{id}', [AdminContoller::class, 'changeStatus'])->name('features1');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');
    

    

});

// Route:: middleware(['auth','role:admin'])->group(function(){


//client/agent
Route::middleware(['auth','role:client'])->group(function(){

    Route::get('/client/dashboard', [ClientController::class, 'ClientDashboard'])->name('clientdash');
    Route::get('/client/logout', [ClientController::class, 'ClientLogout'])->name('client.logout');
    Route::get('/client/hotels', [ClientController::class, 'ClientHotel'])->name('client.hotels');
    Route::get('/client/venues', [ClientController::class, 'ClientVenue'])->name('client.venues');
    Route::get('/client/shortlets', [ClientController::class, 'ClientShortlet'])->name('client.shortlets');
    Route::get('/client/Profile', [ClientController::class, 'ClientProfile'])->name('client_profile');
    Route::post('/client/Store', [ClientController::class, 'ClientStore'])->name('client.store');
    Route::get('/client/password', [ClientController::class, 'ChangePassword'])->name('client.password');
    Route::post('/client/update', [ClientController::class, 'ClientUpdatePassword'])->name('client.update');
    Route::get('/display', [ClientController::class, 'scheduledisplay'])->name('client.email');
    Route::get('/message', [ClientController::class, 'Clientdisplay'])->name('client.display');
    Route::get('/compose', [ClientController::class, 'Compose'])->name('client.compose');
    Route::post('/client/compose-email', [EmailController::class, 'sendEmail'])->name('admin.compose.email');
   
    // Route::post('/client/feature', [ClientController::class, 'ClientFeature'])->name('client.feature');

    Route::post('/client/venue', [VenueController::class, 'Venue'])->name('venue');
    Route::post('/client/shortlet', [ShortletController::class, 'Shortlet'])->name('shortlet');
    Route::post('/client/hotel', [HotelController::class, 'Hotel'])->name('hotel');
    Route::post('/agent/update/property/thumbnail', [HotelController::class, 'updateThumbnail'])->name('agent.update.property.thumbnail');

    //CRUD CONTROLLERS
    Route::get('/client/venue_display', [DisplayController::class, 'display'])->name('venue.display');
    Route::get('/client/hotel_display', [DisplayController::class, 'hoteldisplay'])->name('hotel.display');
    Route::get('/client/shortlet_display', [DisplayController::class, 'shortletdisplay'])->name('shortlet.display');
    Route::get('/venues/{id}/edit', [DisplayController::class, 'edit'])->name('venues.edit');
    Route::get('/hotel/{id}/edit', [DisplayController::class, 'shortletedit'])->name('shortlets.edit');
    Route::get('/shortlet/{id}/edit', [DisplayController::class, 'hoteledit'])->name('hotels.edit');
    Route::post('/venues/{id}/update', [DisplayController::class, 'update'])->name('venues.update');
    Route::post('/shortlet/{id}/update', [DisplayController::class, 'updateshortlet'])->name('shortlets.update');
    Route::post('/hotel/{id}/update', [DisplayController::class, 'hotelupdate'])->name('hotels.update');
    Route::delete('/venues/{id}', [DisplayController::class, 'destroy'])->name('venues.destroy');
    Route::delete('/shortlets/{id}', [DisplayController::class, 'shortletdestroy'])->name('shortlets.destroy');
    Route::delete('/hotels/{id}', [DisplayController::class, 'hoteldestroy'])->name('hotels.destroy');



});

Route::get('/search', [SearchController::class, 'search'])->name('search');




Route::get('/admin', [AdminContoller::class, 'AdminLogin'])->name('admin.login');