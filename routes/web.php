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
    return view('index');
});

Auth::routes();

/* check user login type*/
Route::get('check/login','HomeController@checkLogin');
/*end*/

/*start user panel routes*/
Route::group([ 'prefix' => 'user', 'middleware' => 'InvestorMiddleware' ],function () {
	Route::get('dashboard', 'HomeController@index');
});
/*end user panel routes*/

/*start admin panel routes*/
Route::group([ 'prefix' => 'admin', 'middleware' => 'AdminMiddleware' ],function () {
	
	//dashboard page section
	Route::resource('dashboard','Admin\Dashboard');
	Route::get('update-profile','Admin\Dashboard@edit');
	//end

	//investor section
    Route::resource('investors','Admin\InvestorController');
    Route::get('search-investors','Admin\InvestorController@search');
	//end
});
/*end admin panel routes*/