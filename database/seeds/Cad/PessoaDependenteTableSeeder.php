<?php

use Illuminate\Database\Seeder;

class PessoaDependenteTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = \App\Models\Cad\Pessoa::all();
        $pessoadep = \App\Models\Cad\Pessoa::all();
        $tipo = \App\Models\Cad\PessoaDependenteTipo::all();
        foreach ($pessoas as $pessoa) {

            factory(\App\Models\Cad\PessoaDependente::class, 2)
                ->make()
                ->each(function ($input) use ($pessoa, $pessoadep, $tipo) {
                    $input->pessoa_id = $pessoa->id;
                    $tipos = $tipo->random();
                    $dep = $pessoadep->random();
                    $input->pessoa_dependente_tipo_id = $tipos->id;
                    $input->pessoa_dependente_id = $dep->id;
                    $input->save();
                }
                );
        }
    }
}
