<?php

use Illuminate\Database\Seeder;

class MovNatOperacaoTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Cad\MovNatOperacao::class, 1)->create([
            'nome'=> 'Compra de Mercadorias',
            'tipo' => 'E',
        ]);

        factory(\App\Models\Cad\MovNatOperacao::class, 1)->create([
            'nome'=> 'Despesa',
            'tipo' => 'E',
            'movestoque' => 0
        ]);

        factory(\App\Models\Cad\MovNatOperacao::class, 1)->create([
            'nome'=> 'Venda',
            'tipo' => 'S',
        ]);
    }
}
