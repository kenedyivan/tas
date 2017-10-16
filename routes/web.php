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

// Authentication Routes...
Route::get('/','Auth\LoginController@showLoginForm')->name('login.form');
Route::post('/', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

//Business Model Routes
Route::get('/part1/{gross_turnover}', "PresumptiveTaxPayersController@part1");
Route::get('/city-and-divisions/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@cityAndDivisions");
Route::get('/municipalities/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@municipalities");
Route::get('/towns-and-trading-centers/{gross_turnover}/{business_type}', "PresumptiveTaxPayersController@townsAndTradingCenters");
Route::get('/part3/{monthly_salary}', "NormalTaxPayersController@salaryTax");


//Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
