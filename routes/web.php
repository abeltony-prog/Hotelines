<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\RestaurantController;
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

Route::get('/', [WelcomeController::class , 'welcome']);
Route::get('/more/{id}', [WelcomeController::class , 'hotelmore']);
Route::get('/moretables/{id}', [WelcomeController::class , 'moretables']);
Route::get('/home', [HomeController::class , 'index']);
Route::get('/bookNow/{id}', [WelcomeController::class , 'booking']);
Route::post('/book', [BookingController::class , 'book']);
Route::post('/addHotel', [HotelController::class , 'addHotel']);
Auth::routes();
Route::get('/dashboard', [HotelController::class , 'dashboard']);
Route::get('/HotelRooms', [HotelController::class , 'rooms']);
Route::get('/addRoom', [RoomsController::class , 'addRooms']);
Route::get('/Restaurant', [RestaurantController::class , 'restaurant']);
Route::post('/addh', [RoomsController::class , 'addh']);
Route::get('/addTables', [RestaurantController::class , 'addTables']);
Route::post('/add', [RestaurantController::class , 'add']);


//Route::post('addHotel', 'HomeController@addHotel')->name('addHotel');

