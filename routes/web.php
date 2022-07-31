<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
	Route::get('/', function () {
		return view('auth.login');
	});

	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');

	//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


	//Auth::routes();

	//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
	//});
	Route::group(['middleware' => ['auth', 'permission']], function () {
		Route::get('table-list', function () {
			return view('pages.table_list');
		})->name('table');

		Route::get('typography', function () {
			return view('pages.typography');
		})->name('typography');

		Route::get('icons', function () {
			return view('pages.icons');
		})->name('icons');

		Route::get('map', function () {
			return view('pages.map');
		})->name('map');

		Route::get('notifications', function () {
			return view('pages.notifications');
		})->name('notifications');

		Route::get('rtl-support', function () {
			return view('pages.language');
		})->name('language');

		Route::get('upgrade', function () {
			return view('pages.upgrade');
		})->name('upgrade');
		//});

		//Route::group(['middleware' => 'auth'], function () {
		Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
		Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

		/**
		 * User Routes
		 */
		Route::group(['prefix' => 'users'], function () {
			Route::get('/', 'UserController@index')->name('users.index');
			Route::get('/create', 'UserController@create')->name('users.create');
			Route::post('/create', 'UserController@store')->name('users.store');
			Route::get('/{user}/show', 'UserController@show')->name('users.show');
			Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
			Route::patch('/{user}/update', 'UserController@update')->name('users.update');
			Route::delete('/{user}/delete', 'UserController@destroy')->name('users.destroy');
		});

<<<<<<< HEAD
	
=======
		/**
		 * Invoice Routes
		 */
		Route::group(['prefix' => 'invoice'], function () {
			Route::get('/', 'InvoiceController@index')->name('invoices.index');
			Route::get('/create', 'InvoiceController@create')->name('invoices.create');
			Route::post('/create', 'InvoiceController@store')->name('invoices.store');
			Route::get('/{invoice}/show', 'InvoiceController@show')->name('invoices.show');
			Route::get('/{invoice}/edit', 'InvoiceController@edit')->name('invoices.edit');
			Route::patch('/{invoice}/update', 'InvoiceController@update')->name('invoices.update');
			Route::delete('/{invoice}/delete', 'InvoiceController@destroy')->name('invoices.destroy');
		});
>>>>>>> cc1095dbe3a557049032bf79e535bc6ad1d13a60
		Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

	});
});