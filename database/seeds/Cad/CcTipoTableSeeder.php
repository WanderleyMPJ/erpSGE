<?php

use Illuminate\Database\Seeder;

class CcTipoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cad\CcTipo::create(['nome'=> 'CAIXA']);
        \App\Models\Cad\CcTipo::create(['nome'=> 'BANCO']);
        \App\Models\Cad\CcTipo::create(['nome'=> 'CARTAO']);
        \App\Models\Cad\CcTipo::create(['nome'=> 'INVESTIMENTO']);
        \App\Models\Cad\CcTipo::create(['nome'=> 'EMPRESTIMO']);
    }
}
