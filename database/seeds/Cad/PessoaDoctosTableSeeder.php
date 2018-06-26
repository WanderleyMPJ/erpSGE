<?php

use App\Models\Cad\PessoaDocto;
use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaDoctoTipo;
use Illuminate\Database\Seeder;

class PessoaDoctosTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = Pessoa::all();
        $DoctoTipo = PessoaDoctoTipo::all();
        foreach ($pessoas as $pessoa) {
            for ($i = 1; $i < 6; $i++) {
                factory(PessoaDocto::class, 1)
                    ->make()
                    ->each(function ($input) use ($pessoa, $i) {

                        // $pessoa = $pessoas->random();
                     //   $tipo = $DoctoTipo->random();
                        $input->pessoa_id = $pessoa->id;
                        $input->pessoa_docto_tipo_id = $i;
                        $input->save();

                    }
                    );
            }
        }

    }
}
