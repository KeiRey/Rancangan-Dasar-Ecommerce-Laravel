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


Route::group(['middleware' => 'revalidate'], function()
{

	Route::get('/', function () {
		return view('welcome');
	});

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/registrasi',				'AuthController@registrasi')->name('registrasi');
	Route::post('/simpanregistrasi',		'AuthController@simpanregistrasi')->name('simpanregistrasi');
	Route::get('/login',					'AuthController@login')->name('login');
	Route::post('/postlogin',				'AuthController@postlogin');
	Route::get('/login/facebook', 			'AuthController@redirectToFacebook')->name('fblogin');
	Route::get('/login/facebook/callback',	'AuthController@handleFacebookCallback')->name('fbcallback');
	Route::get('/login/google', 			'AuthController@redirectToGoogle')->name('gologin');
	Route::get('/login/google/callback',	'AuthController@handleGoogleCallback')->name('gocallback');
	Route::get('/logout',					'AuthController@logout');


	Route::group(['middleware' => ['auth','ceklevel:admin,pembeli']],function(){
		
		Route::get('/profile/{id}',			'adminController@profile');
		Route::get('/dabar/delete/{id}',	'adminController@destroy');
		Route::get('/daser',				'adminController@daser');
		Route::get('/dasan',				'adminController@dasan');
		Route::get('/dasan/export',			'adminController@exportPdf');
		Route::put('/dasan/status/{id}',	'adminController@status');
		Route::get('/dabar',				'adminController@dabar');
		Route::get('/debar/{id}',			'adminController@debar');
		Route::post('/dabar/tambah',		'adminController@create');
		Route::get('/edit/{id}',			'adminController@edit');
		Route::post('/edit/update/{id}',	'adminController@update');

		Route::post('/pesan/{id}',			'barangController@peesan');
		Route::get('/shop',					'barangController@shop');
		Route::get('/barang/delete/{id}',	'barangController@destroy');
		Route::get('check-out',				'barangController@check_out');
		Route::get('konfirmasi',			'barangController@konfirmasi');
		Route::resource('barang',			'barangController');
		Route::delete('/check-out/{id}',	'barangController@delete');
		Route::get('/pesan/{id}',			'barangController@pesan');

		Route::get('/profile',				'ProfileController@index');
		Route::post('/profile',				'ProfileController@update');


		Route::get('/history',				'HistoryController@index');
		Route::get('/history/{id}',			'HistoryController@detail');


		Route::get('/contact', function () {
			return view('barang.contact');
		});
	});

});