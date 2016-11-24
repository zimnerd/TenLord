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


Auth::routes();

Route::model('units', 'Unit');
Route::model('properties', 'Property');
Route::model('tenants', 'Tenant');

Route::get('/', 'HomeController@index');

Route::resource('properties', 'PropertiesController');
Route::resource('properties.units', 'UnitsController');
Route::resource('properties.tenants', 'TenantsController');
