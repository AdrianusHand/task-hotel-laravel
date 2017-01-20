<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//    return view('coba',['name'=>'Holy','age'=>19]);
// });

// Route::get('/', function(){
// 	return view('welcome');
// });

Route::get('hay','IndexController@hello');

Route::get('hotel','hotelController@getListHotel');

Route::get('insert', function(){
	return view('insert');

});

Route::post('insert','hotelController@insertHotel')->name('insert');

Route::group(['prefix' => 'edit'], function(){
	Route::get('{id}', [
		'uses' => 'hotelController@findEditHotel',
		'as' => 'edit'
	]);
});

Route::get('calender','fullcalenderController@calender');

Route::get('tiktail', function(){
	return view('tiktail');
});
