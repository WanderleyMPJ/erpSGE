<?php

use Illuminate\Database\Seeder;

class CcBancoCobrancaTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cad\CcBancoCobranca::create([
           'cc_banco_id' => 1,
           'convenio' => 3495095,
           'carteira'=> 9
        ]);

        \App\Models\Cad\CcBancoCobranca::create([
            'cc_banco_id' => 2,
            'convenio' => 9995095,
            'carteira'=> 109
        ]);
    }
}
