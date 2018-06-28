<?php

use Illuminate\Database\Seeder;

class FormapgTipoTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Cad\FormapgTipo::class, 5)->create();
    }
}
