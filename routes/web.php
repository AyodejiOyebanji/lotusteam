<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
// All listings
Route::get('/', [ListingController::class, "index"]);


//show create form
Route::get('/listings/create', [ListingController::class, "create"])->middleware('auth');

//Store listing data
Route::post('/listings', [ListingController::class, "store"])->middleware('auth');

//show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, "edit"])->middleware('auth');

// Edit submit Form
Route::put('/listings/{listing}', [ListingController::class, "update"])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, "destroy"])->middleware('auth');

//manage listings
Route::get("/listings/manage", [ListingController::class, 'manage'])->middleware('auth');


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, "show"]);

//show register
Route::get('/register', [UserController::class, "create"])->middleware('guest');
// create new user
Route::post('/users', [UserController::class, "store"]);

//Log out
Route::post('/logout', [UserController::class, "logout"])->middleware('auth');
//show Login form
Route::get('/login', [UserController::class, "login"])->name('login')->middleware('guest');
// login user
Route::post('/users/authenticate', [UserController::class, "authenticate"]);
