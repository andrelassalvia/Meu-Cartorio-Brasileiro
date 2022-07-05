<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => random_int(2001, 3000),
            'servicetype_id' => random_int(1, 7),
            'provider_id' => random_int(3, 1002),
            'orderstatus_id' => random_int(1, 7),
            'classification_id' => random_int(1, 5)
        ];
    }
}
