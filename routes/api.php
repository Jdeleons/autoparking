<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiresource('datas', 'DataController');
Route::apiresource('userParkings', 'UserParkingController');
Route::apiresource('locations', 'LocationController');
Route::apiresource('cities', 'CityController');
Route::apiresource('countries', 'CountryController');
