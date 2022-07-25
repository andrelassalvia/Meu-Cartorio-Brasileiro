<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SearchSanitizeMiddleware;
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
Route::resource('clients', 'App\Http\Controllers\ClientController')
    ->middleware(['auth']);

// BRAZIL CITIES
Route::get('brazilCities/{brazilState}', 'App\Http\Controllers\BrazilCityController@loadBrazilCities')
    ->middleware(['auth'])
    ->name('brazilCities.loadBrazilCities');

// CITIES
Route::get('cities/{country}', 'App\Http\Controllers\CitiController@loadCities')
    ->middleware('[auth')
    ->name('cities.loadCities');

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

// SEARCH
Route::middleware(['auth'])->group(function(){
    route::get('search-clients', 'App\Http\Controllers\SearchController@searchClients')
        ->name('search.clients');
    route::get('search-orders', 'App\Http\Controllers\SearchController@searchOrders')
        ->name('search.orders');
});

// SERVICE ORDERS
Route::resource('service-orders', 'App\Http\Controllers\ServiceOrderController')
    ->middleware(['auth']);

// SERVICES TYPES
route::resource('service-types', 'App\Http\Controllers\ServiceTypeController')
    ->middleware(['auth']);


