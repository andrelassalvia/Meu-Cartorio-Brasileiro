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
Route::prefix('clients-list/')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Client\ClientListController')
    ->group(function(){
        route::get('list/{clientstatus}', 'list' )->name('clients.list');
    });
Route::resource('clients', 'App\Http\Controllers\Client\ClientController')
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

// SERVICE ORDERS
Route::resource('service-orders', 'App\Http\Controllers\ServiceOrderController')
    ->middleware(['auth']);

// PROVIDERS
Route::resource('providers', 'App\Http\Controllers\ProviderController')
    ->middleware(['auth']);
