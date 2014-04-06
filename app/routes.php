<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'WelcomeController@welcome', 'as' => 'welcome'));


Route::get('hotels', array('uses' => 'HotelController@index', 'as' => 'hotel.index'));
Route::get('hotel', array('uses' => 'HotelController@create', 'as' => 'hotel.create'));
Route::post('hotel/store', array('uses' => 'HotelController@store', 'as' => 'hotel.store'));
Route::any('hotel/{id}/edit', array('uses' => 'HotelController@edit', 'as' => 'hotel.edit'));
Route::get('hotel/{id}/delete', array('uses' => 'HotelController@delete', 'as' => 'hotel.delete'));
