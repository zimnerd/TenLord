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
Route::model('owners', 'Tenant');

Route::get('/', 'HomeController@index');

Route::resource('properties', 'PropertiesController');
Route::resource('properties.units', 'UnitsController');
Route::resource('properties.units.tenants', 'TenantsController');
Route::resource('properties.units.owners', 'OwnersController');
Route::post('profile', 'UserController@update_avatar');
Route::get('profile', 'UserController@profile');
Route::get('notifications', 'UserController@notifications');

Route::get('property', 'PropertiesController@getProperties');
Route::get('tenants', 'PropertiesController@getTenants');
Route::resource('reports', 'ReportsController');