<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('/landing_setting', 'LandingSettingController');

Route::resource('/service', 'ServiceController');

Route::resource('/feature', 'FeatureController');

Route::resource('/plan', 'PlanController');

Route::get('/contact', 'ContactController');
