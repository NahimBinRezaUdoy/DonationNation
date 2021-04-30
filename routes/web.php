<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\VolunteerRequestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Admin
Route::get('admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');


// Admin Password
Route::get('admin/updatepassword', [AdminController::class, 'updatepassword']);
Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashborad');

    //Volunteer
    Route::get('admin/volunteer', [VolunteerController::class, 'index'])->name('admin.volunteer');
    Route::get('admin/volunteer/manage_volunteer', [VolunteerController::class, 'manage_volunteer']);
    Route::get('admin/volunteer/manage_volunteer/{id}', [VolunteerController::class, 'manage_volunteer']);
    Route::post('admin/volunteer/manage_volunteer_process', [VolunteerController::class, 'manage_volunteer_process'])->name('volunteer.manage_volunteer_process');
    Route::get('admin/volunteer/delete/{id}', [VolunteerController::class, 'delete']);


    // Volunteer Request
    Route::get('admin/volunteerRequest', [VolunteerRequestController::class, 'index'])->name('admin.volunteerRequest');
    Route::get('admin/volunteerRequest/delete/{id}', [VolunteerRequestController::class, 'delete']);

    // Contact
    Route::get('admin/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('admin/contact/delete/{id}', [ContactController::class, 'delete']);

    //Post
    Route::get('admin/post/index', [PostController::class, 'index'])->name('posts.index');
    Route::get('admin/post/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('admin/post', [PostController::class, 'store'])->name('posts.store');

    Route::get('admin/post/delete/{id}', [PostController::class, 'delete']);

    //Cause
    Route::get('admin/cause/index', [CauseController::class, 'index'])->name('causes.index');
    Route::get('admin/cause/create', [CauseController::class, 'create'])->name('causes.create');
    Route::post('admin/cause', [CauseController::class, 'store'])->name('causes.store');
    Route::get('admin/cause/delete/{id}', [CauseController::class, 'delete']);

    //donate
    Route::get('admin/donate/index', [DonateController::class, 'index'])->name('donate.index');
    Route::get('admin/donate/create', [DonateController::class, 'create'])->name('donate.create');
    Route::post('admin/donate', [DonateController::class, 'store'])->name('donate.store');
    Route::get('admin/donate/delete/{id}', [DonateController::class, 'delete']);

    //gallery
    Route::get('admin/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('admin/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('admin/gallery', [GalleryController::class, 'store'])->name('gallery->store');
    Route::get('admin/gallery/delete/{id}', [GalleryController::class, 'delete']);


    //Event
    Route::get('admin/event/index', [EventController::class, 'index'])->name('event.index');
    Route::get('admin/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('admin/event', [EventController::class, 'store'])->name('event.store');
    Route::get('admin/event/delete/{id}', [EventController::class, 'delete']);


    //Logout
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error', 'Logout Successfully');
        return redirect('admin');
    });
});


// FrontEnd Part

Route::get('/', [HomeController::class, 'home']);

Route::get('/about', [HomeController::class, 'about']);

//blog post frontEnd
Route::get('/blog', [PostController::class, 'blog']);
Route::get('/post/{post}', [PostController::class, 'show'])->name('posts.show');

//Causes post frontEnd
Route::get('/causes', [CauseController::class, 'causes']);
Route::get('/cause/{cause}', [CauseController::class, 'show'])->name('causes.show');


//Donate post frontEnd
Route::get('/donate', [DonateController::class, 'donate']);
Route::get('/donate/{donate}', [DonateController::class, 'show'])->name('donate.show');


//Gallery frontEnd
Route::get('/gallery', [GalleryController::class, 'gallery']);

//Event FrontEnd
Route::get('/event', [EventController::class, 'event']);
Route::get('/event/{event}', [EventController::class, 'show'])->name('event.show');

//Contact FrontEnd
Route::get('/contact', [ContactController::class, 'contact']);



//volunteerRequest
Route::post('/volunteerRequest', [VolunteerRequestController::class, 'store']);

//contact
Route::post('/contact', [ContactController::class, 'store']);

Auth::routes();


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END