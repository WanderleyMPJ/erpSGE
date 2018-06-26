<?php

use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaTelefone;
use Illuminate\Database\Seeder;

class PessoaTelefoneTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = Pessoa::all();
        foreach ($pessoas as $pessoa) {

                factory(PessoaTelefone::class, 2)
                    ->make()
                    ->each(function ($input) use ($pessoa) {
                        $input->pessoa_id = $pessoa->id;
                        $input->save();
                    }
                    );

        }
    }
}
