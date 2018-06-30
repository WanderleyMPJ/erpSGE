<?php

use Illuminate\Database\Seeder;

class FormapgTipoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cad\FormapgTipo::create(['nome'=> 'DINHEIRO']);
        \App\Models\Cad\FormapgTipo::create(['nome'=> 'BOLETO']);
        \App\Models\Cad\FormapgTipo::create(['nome'=> 'CARTAO']);
    }
}
