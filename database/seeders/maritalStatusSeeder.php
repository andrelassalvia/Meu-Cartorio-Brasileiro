<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatus = [
            ['name' => 'Casado'],
            ['name' => 'Solteiro'],
            ['name' => 'Separado'],
            ['name' => 'Viúvo'],
            ['name' => 'Outro'],
        ];

        foreach ($maritalStatus as $value) {
            MaritalStatus::create($value);
        }
    }
}
