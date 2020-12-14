<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

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

Route::get('/', [StaticPageController::class, 'home']); //HOMEPAGE
Route::get('/about', 'StaticPageController@about'); //ABOUTPAGE
Route::get('/restaurant', 'RestaurantPageController@index'); //RESTAURANT
Route::get('/bar', 'BarPageController@index'); //RESTAURANT
