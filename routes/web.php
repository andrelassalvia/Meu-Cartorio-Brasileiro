<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CLIENTS
Route::get('clients-search', 'App\Http\Controllers\Client\SearchController@search')
    ->middleware(['auth'])->name('clients.search');
Route::resource('clients', 'App\Http\Controllers\ClientController')
    ->middleware(['auth']);

// BRAZIL CITIES
Route::prefix('brazilCities')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\BrazilCityController')
    ->group(function(){
        route::get('/{brazilState}', 'loadBrazilCities')
            ->name('brazilCities.loadBrazilCities');
    });

// CITIES
Route::prefix('cities')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\CityController')
    ->group(function(){
        route::get('/{country}', 'loadCities')->name('cities.loadCities');
    });

// COUNTRIES
Route::resource('countries', 'App\Http\Controllers\CountryController')
    ->middleware(['auth']);

// MARITAL STATUS
Route::view('/marital-status-main', 'marital.main')
    ->name('marital-status-main.main');
Route::resource('marital-status', 'App\Http\Controllers\MaritalStatusController')
    ->middleware(['auth']);

// OCCUPATIONS
Route::view('/occupations-main', 'occupation.main')
    ->name('occupations-main.main');
Route::resource('occupations', 'App\Http\Controllers\OccupationController')
    ->middleware(['auth']);

// PROVIDERS
Route::resource('providers', 'App\Http\Controllers\ProviderController')
->middleware(['auth']);

// SERVICE ORDERS
Route::get('orders-search', 'App\Http\Controllers\Order\SearchOrderController@search')
    ->middleware(['auth'])->name('orders.search');
Route::resource('service-orders', 'App\Http\Controllers\ServiceOrderController')
    ->middleware(['auth']);

// SERVICES TYPES
route::resource('service-types', 'App\Http\Controllers\ServiceTypeController')
    ->middleware(['auth']);


