<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Occupation;

class occupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = [

            ['name' => 'Autônomo'],
            ['name' => 'Militar'],
            ['name' => 'Aposentado'],
            ['name' => 'Pedreiro'],
            ['name' => 'Ajudante'],
            ['name' => 'Faxineiro'],
            ['name' => 'Do lar'],
            ['name' => 'Bancário'],
            ['name' => 'Militar'],
        ];

        foreach ($occupations as $occupation){
            Occupation::create($occupation);
        }
    }
}
