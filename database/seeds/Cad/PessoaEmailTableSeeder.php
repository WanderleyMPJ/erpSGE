<?php

use App\Models\Cad\Pessoa;
use Illuminate\Database\Seeder;

class PessoaEmailTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = Pessoa::all();
        foreach ($pessoas as $pessoa) {

            factory(\App\Models\Cad\PessoaEmail::class, 2)
                ->make()
                ->each(function ($input) use ($pessoa) {
                    $input->pessoa_id = $pessoa->id;
                    $input->save();
                }
                );

        }    }
}
