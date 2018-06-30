<?php

use Illuminate\Database\Seeder;

class FormapgParcelasTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cad\FormapgParcela::create([
           'formapg_id' => 1,
            'dias' => 0
        ]);

        \App\Models\Cad\FormapgParcela::create([
            'formapg_id' => 2,
            'dias' => 30
        ]);

        \App\Models\Cad\FormapgParcela::create([
            'formapg_id' => 3,
            'dias' => 30
        ]);
    }
}
