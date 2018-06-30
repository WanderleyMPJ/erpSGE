<?php

use Illuminate\Database\Seeder;

class FormapgTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cad\Formapg::create([
            'nome'=> 'A VISTA',
            'formapg_tipo_id' => 1
        ]);

        \App\Models\Cad\Formapg::create([
            'nome'=> 'Boleto Santander 15 dias',
            'formapg_tipo_id' => 2
        ]);

        \App\Models\Cad\Formapg::create([
            'nome'=> 'Cartao de Credito',
            'formapg_tipo_id' => 3
        ]);
    }
}
