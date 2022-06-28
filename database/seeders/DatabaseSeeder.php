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
                occupationsSeeder::class,
            ]
        );
    }
}
