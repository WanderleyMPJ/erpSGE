<?php

use Illuminate\Database\Seeder;

class CcTableSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Cad\Cc::create([
            'nome' =>'Dinheiro',
            'cc_Tipo_id' => 1,
            'empresa_id' => 1
        ]);

        \App\Models\Cad\Cc::create([
            'nome' =>'Banco Itau',
            'cc_Tipo_id' => 2,
            'empresa_id' => 1
        ]);

        \App\Models\Cad\Cc::create([
            'nome' =>'Banco Santander',
            'cc_Tipo_id' => 2,
            'empresa_id' => 2
        ]);

        \App\Models\Cad\Cc::create([
            'nome' =>'Santander Visa',
            'cc_Tipo_id' => 3,
            'empresa_id' => 2
        ]);
    }
}
