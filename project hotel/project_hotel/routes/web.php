<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[hotelcontroller::class,'index']);
Route::get('/home',[hotelcontroller::class,'home']);
Route::get('/about',[hotelcontroller::class,'about']);
Route::get('/footer',[hotelcontroller::class,'footer']);
Route::get('/rooms',[hotelcontroller::class,'rooms']);
Route::get('/contact',[hotelcontroller::class,'contact']);
Route::get('/login',[hotelcontroller::class,'login']);