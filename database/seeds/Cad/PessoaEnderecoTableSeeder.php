<?php

use Illuminate\Database\Seeder;

class PessoaEnderecoTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = \App\Models\Cad\Pessoa::all();
        foreach ($pessoas as $pessoa) {

            factory(\App\Models\Cad\PessoaEndereco::class, 2)
                ->make()
                ->each(function ($input) use ($pessoa) {
                    $input->pessoa_id = $pessoa->id;
                    $input->save();
                }
                );
        }
    }
}
