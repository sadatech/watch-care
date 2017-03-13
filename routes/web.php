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

use Illuminate\Http\Request;
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::group(['middleware' => ['auth']], function () {
	Route::get('/', 'HomeController@index');

	Route::get('/home', 'HomeController@index');

	Route::get('/watchRepair', 'WatchRepairController@index');
	Route::get('/requestTracking', 'requestTrackingController@index');


	//Veritrans

	Route::get('/vtweb', 'Veritrans\PagesController@vtweb');

	Route::get('/vtdirect', 'Veritrans\PagesController@vtdirect');
	Route::post('/vtdirect', 'Veritrans\PagesController@checkout_process');

	Route::get('/vt_transaction', 'Veritrans\PagesController@transaction');
	Route::post('/vt_transaction', 'Veritrans\PagesController@transaction_process');

	Route::post('/vt_notif', 'Veritrans\PagesController@notification');

	Route::get('/snap', 'Veritrans\SnapController@snap');
	Route::get('/snaptoken', 'Veritrans\SnapController@token');
	Route::post('/snapfinish', 'Veritrans\SnapController@finish');

// });

	Route::post('provinceFilter', 'Lib\CityController@filter');
	Route::post('cityFilter', 'Lib\CityController@filterCity');
