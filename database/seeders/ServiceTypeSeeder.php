<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['name' => 'Procuração'],
            ['name' => 'Certidões'],
            ['name' => 'E-Consular'],
            ['name' => 'Separação'],
            ['name' => 'Casamento'],
            ['name' => 'Autorização de Viagem'],
            ['name' => 'Outros']
        ];

        foreach ($services as $service) {
            ServiceType::create($service);
        }
    }
}
