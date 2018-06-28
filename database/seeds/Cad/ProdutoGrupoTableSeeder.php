<?php

use Illuminate\Database\Seeder;

class ProdutoGrupoTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Cad\ProdutoGrupo::class, 10)->create();
    }
}
