<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/part1/{gross_turnover}', "PresumptiveTaxPayersController@part1");

Route::get('/city-and-divisions/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@cityAndDivisions");

Route::get('/municipalities/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@municipalities");

Route::get('/towns-and-trading-centers/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@townsAndTradingCenters");
