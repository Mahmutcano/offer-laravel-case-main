<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Mail\OfferMail;

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



Route::get('/',[OfferController::class, 'list']);
Route::get('/create-offer/{id}', [OfferController::class, 'store']);
Route::post('/create-offer/{id}', [OfferController::class, 'offerForm']);



Route::middleware(['auth:sanctum',
config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
})->name('dashboard');

Route::get('list-offer',[OfferController::class, 'offerList'])->name('list-offer');
Route::get('mail-form/{id}',[OfferController::class, 'confirm'])->name('mail-form/{id}');
Route::post('/send-email', function () {
    Mail::to('mail@mail.com')->send(new OfferMail());
    return new OfferMail();
});

});


