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

Route::get('/', 'HomeController@index');

Route::get('passazhiram', 'HomeSenderController@index')
    ->name('homeSender:index');

Route::post('sign-up', 'SignUpController@store')
    ->name('signUp:sign-up');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')
    ->name('login:logout')
    ->middleware('auth');

Route::get('flight/step1/{fromId}/{toId}', 'FlightStep1Controller@index')
    ->name('flightStep1:index');
Route::post('flight/step1', 'FlightStep1Controller@store')
    ->name('flightStep1:store');

Route::get('flight/step2/{fromId}/{toId}', 'FlightStep2Controller@index')
    ->name('flightStep2:index')
    ->middleware('auth');
Route::post('flight/step2', 'FlightStep2Controller@store')
    ->name('flightStep2:store')
    ->middleware('auth');

Route::get('flight/step3/{fromId}/{toId}', 'FlightStep3Controller@index')
    ->name('flightStep3:index')
    ->middleware('auth');
Route::post('flight/step3', 'FlightStep3Controller@store')
    ->name('flightStep3:store')
    ->middleware('auth');

Route::get('flight/step4/{fromId}/{toId}', 'FlightStep4Controller@index')
    ->name('flightStep4:index')
    ->middleware('auth');
Route::post('flight/step4', 'FlightStep4Controller@store')
    ->name('flightStep4:store')
    ->middleware('auth');

Route::get('flight/step5/{fromId}/{toId}', 'FlightStep5Controller@index')
    ->name('flightStep5:index')
    ->middleware('auth');
Route::get('flight/step5/no-photo', 'FlightStep5Controller@noPhoto')
    ->name('flightStep5:noPhoto')
    ->middleware('auth');


Route::get('/search/view/{id}', 'SearchController@view')
    ->name('search:view');

Route::get('/search/{fromId}/{toId}', 'SearchController@index')
    ->name('search:index');
Route::get('/search/{fromId}/{toId}/{id}', 'SearchController@index')
    ->name('search:indexSelect');

Route::get('/search/json/{fromId}/{toId}/{offset}', 'SearchController@ajax')
    ->name('search:ajax');

Route::get('carrier/cabinet', 'CarrierCabinetController@index')
    ->name('carrierCabinet:index')
    ->middleware('auth');;

Route::get('autocomplete', 'CityController@index');
Route::get('autocomplete/country', 'CountryController@index');

Route::post('profile/update/name', 'ProfileController@updateName')
    ->middleware('auth');
Route::post('profile/update/email', 'ProfileController@updateEmail')
    ->middleware('auth');
Route::post('profile/update/phone', 'ProfileController@updatePhone')
    ->middleware('auth');
Route::post('profile/update/age', 'ProfileController@updateAge')
    ->middleware('auth');
Route::post('profile/update/photo', 'ProfileController@photo')
    ->middleware('auth');

Route::delete('carrier/cabinet/flight/change-status/{id}', 'FlightController@delete')
    ->name('flight:delete')
    ->middleware('auth');

Route::post('carrier/cabinet/flight/change-status/{id}', 'FlightController@updateStatus')
    ->name('flight:updateStatus')
    ->middleware('auth');

Route::post('carrier/cabinet/flight/create-ajax', 'FlightController@createAjax')
    ->name('flight:createAjax')
    ->middleware('auth');

/**
 * Admin
 */
Route::get('admin', 'AdminController@index')
    ->name('admin:index')
    ->middleware(['auth', 'admin']);

Route::get('admin/delete/{id}', 'AdminController@delete')
    ->name('admin:delete')
    ->middleware(['auth', 'admin']);