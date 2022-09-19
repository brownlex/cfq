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
Route::group(['namespace' => 'App\Http\livewire'], function () {
	Route::get('/live', 'Claim@render')->name('live');
});


Route::group(['namespace' => 'App\Http\Controllers'], function () {
	Route::get('/', function () {
		return view('auth.welcome');
	});

	Auth::routes();
	
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/queue', 'LandingController@queue')->name('queue');
	Route::get('/queueE', 'LandingController@queueE')->name('queueboard');
	Route::get('/landing', 'LandingController@landing')->name('landing');
	Route::get('/claim', 'LandingController@index')->name('claim');
	Route::post('/client/create-step-one', 'LandingController@createStepOne')->name('client.create.step.one');
	Route::get('/client/create-step-three', 'LandingController@createStepThree')->name('client.create.step.three');
	Route::get('/client/create-step-two', 'LandingController@createStepTwo')->name('client.create.step.two');
	Route::post('/client/create-step-two1', 'LandingController@createStepTwo1')->name('client.create.step.two1');
	Route::get('/client/create-step-two2', 'LandingController@createStepTwo2')->name('client.create.step.two2');
	Route::post('/client/create-step-two3', 'LandingController@createStepTwo3')->name('client.create.step.two3');
	Route::get('/client/create-step-two4', 'LandingController@createStepTwo4')->name('client.create.step.two4');
	Route::post('/client/create-step-two5', 'LandingController@createStepTwo5')->name('client.create.step.two5');
	Route::get('/client/create-step-two6', 'LandingController@createStepTwo6')->name('client.create.step.two6');
	Route::post('/client/create-step-two7', 'LandingController@createStepTwo7')->name('client.create.step.two7');
	Route::get('/client/create-step-two8', 'LandingController@createStepTwo8')->name('client.create.step.two8');
	Route::get('/client/create-step-three', 'LandingController@createStepThree')->name('client.create.step.three');
	Route::get('/vistor', 'LandingController@vistor')->name('vistor');
	Route::get('/feedback', 'LandingController@feedback')->name('feedback');
	Route::post('/feedback/create-step-one', 'LandingController@createStepOnef')->name('feedback.create.step.one');

	Route::post('/vistor/create-step-one', 'LandingController@createStepOnev')->name('vistor.create.step.one');
	Route::get('/vistor/create-step-three', 'LandingController@createStepThreev')->name('vistor.create.step.three');
	Route::get('/vistor/create-step-two', 'LandingController@createStepTwov')->name('vistor.create.step.two');
	Route::post('/vistor/create-step-two1', 'LandingController@createStepTwo1v')->name('vistor.create.step.two1');
	Route::get('/vistor/create-step-two2', 'LandingController@createStepTwo2v')->name('vistor.create.step.two2');
	Route::post('/vistor/create-step-two3', 'LandingController@createStepTwo3v')->name('vistor.create.step.two3');
	Route::get('/vistor/create-step-two4', 'LandingController@createStepTwo4v')->name('vistor.create.step.two4');
	Route::post('/vistor/create-step-two5', 'LandingController@createStepTwo5v')->name('vistor.create.step.two5');
	Route::get('/vistor/create-step-two6', 'LandingController@createStepTwo6v')->name('vistor.create.step.two6');
	
	Route::get('/{idNumber}/claim', 'ClaimEnqController@claim')->name('claim.create.claim.ticket');
	Route::get('/{idNumber}/med', 'ClaimEnqController@med')->name('claim.create.med.ticket');
	Route::get('/{idNumber}/enq', 'ClaimEnqController@enq')->name('claim.create.enq.ticket');
/*
	Route::get('/{idNumber}/enq', 'VistorController@ceo')->name('visit.create.ceo.ticket');
	Route::get('/{idNumber}/enq', 'VistorController@claim')->name('visit.create.ceo.ticket');
	Route::get('/{idNumber}/enq', 'VistorController@claim')->name('visit.create.ceo.ticket');
	Route::get('/{idNumber}/enq', 'VistorController@claim')->name('visit.create.ceo.ticket');
	*/
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

		Route::group(['prefix' => 'tickets'], function () {
		Route::get('/display', 'HomeController@display')->name('tickets.display');
		});


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
		Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

	});
});
