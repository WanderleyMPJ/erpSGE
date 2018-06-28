<?php

use App\Models\Cad\Empresa;
use App\Models\Cad\Pessoa;
use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    public function run()
    {
        factory(Empresa::class, 1)->create([
            'nome'=> 'EMPRESA A',
            'pessoa_id' => 1
        ]);

        factory(Empresa::class, 1)->create([
            'nome'=> 'EMPRESA B',
            'pessoa_id' => 2
        ]);

        factory(Empresa::class, 1)->create([
            'nome'=> 'EMPRESA C',
            'pessoa_id' => 3
        ]);
    }
}
