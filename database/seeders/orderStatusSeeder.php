<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class orderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => 'Autorizada'],
            ['name' => 'Aguardando documentos'],
            ['name' => 'Emissão certificação digital'],
            ['name' => 'Confecção da minuta'],
            ['name' => 'Video conferência'],
            ['name' => 'Emissão da procuração'],
            ['name' => 'Encerrada']
        ];
        
        foreach ($status as $key => $value) {
            OrderStatus::create($value);
        }
    }
}
