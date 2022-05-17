<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Room1Controller;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\BillingController;


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
Route::get('/',function(){
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('/contact',[ContactController::class,'contact']);

Route::get('/gallery',[ContactController::class,'gallery']);

Route::get('/about',[AboutController::class,'about']);

Route::get('/room',[RoomController::class,'room']);

Route::get('/room1',[Room1Controller::class,'room1']);

Route::get('/booking',[BookingController::class,'booking']);

//Route::post('/booking',[BookingController::class,'booking']);
//Route::post('/useradd',[RoomController::class,'add']);
Route::post('/useradd',[RoomController::class,'useradd'])->name('useradd');

Route::get('/rooms',[AdminController::class,'rooms']);
Route::post('/uploadrooms',[AdminController::class,'uploadrooms'])->name('uploadrooms');

Route::get('/showrooms',[AdminController::class,'showrooms']);

Route::get('/deleterooms/{id}',[AdminController::class,'deleterooms']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);

Route::post('/updaterooms/{id}',[AdminController::class,'updaterooms'])->name('updaterooms');

Route::get('/search',[RoomController::class,'search']);

Route::get('/showbooking',[RoomController::class,'showbooking']);

Route::get('/view1',[BookingController::class,'view1']);

Route::get('/view2',[BookingController::class,'view2']);

Route::put('/addrating',[RatingController::class,'addrating'])->name('addrating');

Route::get('/delete/{id}',[RoomController::class,'delete']);

Route::get('/mybooking',[RoomController::class,'mybooking']);



Route::get('/payment',[PaymentController::class,'payment']);

Route::get('/proceedtopay/{id}',[PaymentController::class,'proceedtopay'])->name('proceedtopay');

Route::post('/proceedtopay',[PaymentController::class,'proceedtopay']);


Route::get('/paymentprocess',[PaymentController::class,'paymentprocess']);
Route::get('/paymentgateway',[PaymentController::class,'paymentgateway']);

Route::get('/thankyou',[PaymentController::class,'thankyou']);
Route::get('/billing',[PaymentController::class,'billing']);
Route::get('/payments',[PaymentController::class,'payments']);
Route::get('/print',[PaymentController::class,'print']);
Route::get('/profit',[PaymentController::class,'profit']);


Route::get('payWithRazorpay', [RazorpayController::class,'payWithRazorpay'])->name('payWithRazorpay');
Route::post('pay', [RazorpayController::class,'pay'])->name('pay');

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
