<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerificationController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/booking',[HomeController::class,'book']);

Route::get('/view_users',[AdminController::class,'showusers']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/updateuser/{id}',[AdminController::class,'updateuser']);

Route::post('/edituser/{id}',[AdminController::class,'edituser']);

Route::get('/view_reservations',[AdminController::class,'showreservations']);

Route::get('/delete_reservation/{id}',[AdminController::class,'delete_reservation']);

Route::get('/update_reservation/{id}',[AdminController::class,'update_reservation']);

Route::post('/edit_reservation/{id}',[AdminController::class,'edit_reservation']);

Route::get('/view_periods',[AdminController::class,'view_periods']);

Route::get('/add_period_view',[AdminController::class,'add_period_view']);

Route::post('/add_period',[AdminController::class,'add_period']);

Route::get('/update_period_view/{id}',[AdminController::class,'update_period_view']);

Route::post('/edit_period/{id}',[AdminController::class,'edit_period']);

Route::get('/delete_period/{id}',[AdminController::class,'delete_period']);

Route::post('/reservations/{id}',[HomeController::class,'book'])->name('book');
Route::post('/reservations/book/{id}',[HomeController::class,'reservation'])->name('store');

//verificaiton
Route::get('/reservations/book/{id}/verifyDate',[VerificationController::class,'verifyDate'])->name('verifyDate');
Route::get('/reservations/book/{id}/verifyPlace',[VerificationController    ::class,'verifyPlace'])->name('verifyPlace');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
