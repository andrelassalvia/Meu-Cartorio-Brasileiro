<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Client::factory(1000)->create();
        // \App\Models\Provider::factory(1000)->create();
        // \App\Models\ServiceOrder::factory(10000)->create();
        // \App\Models\Comment::factory(10000)->create();
        $this->call(
            [
                // brazilStateSeeder::class,
                // brazilCitySeeder::class,
                // countrySeeder::class,
                // ukCitiesSeeder::class,
                // franceCitiesSeeder::class,
                // franceCitiesSeeder::class,
                // italyCitiesSeeder::class,
                // spainCitiesSeeder::class,
                // portugalCitiesSeeder::class,
                // maritalStatusSeeder::class,
                // occupationsSeeder::class,
                // serviceTypesSeeder::class,
                // clientsStatusSeeder::class,
                // orderStatusSeeder::class,
                // classificationSeeder::class,
            ]
        );
    }
}
