<?php

use App\Models\Cad\PessoaGrupo;
use Illuminate\Database\Seeder;

class PessoaGruposTableSeeder extends Seeder
{
    public function run()
    {
        factory(PessoaGrupo::class, 10)->create();
    }
}
