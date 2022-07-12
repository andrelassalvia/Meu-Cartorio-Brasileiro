<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\ServiceTypeComposer;
use App\Http\View\Composers\BrazilStateComposer;
use App\Http\View\Composers\CountryComposer;
use App\Http\View\Composers\MaritalStatusComposer;
use App\Http\View\Composers\OccupationComposer;
use App\Http\View\Composers\ProviderComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // run bootstrap paginator
        Paginator::useBootstrap();

        // ===== RUN VIEW COMPOSERS =====

        // list service type
        View::composer(['client.listClients', 'order.newOrder', 'serviceType.main'], ServiceTypeComposer::class);

        // list brazil states
        View::composer(
            ['client.listClients', 'client.newClient', 'provider.listProviders', 'provider.newProvider'], 
            BrazilStateComposer::class
        );

        // list countries
        View::composer(
            ['client.listClients', 'client.newClient', 'country.main'],
            CountryComposer::class
        );

        // list marital status
        View::composer(
            ['client.newClient', 'marital.list'],
            MaritalStatusComposer::class
        );

        // list occupations
        View::composer(['client.newClient', 'occupation.list'], OccupationComposer::class);

        // Providers
        View::composer(['provider.listProviders'], ProviderComposer::class);
    }
}
