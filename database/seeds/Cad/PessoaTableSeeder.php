<?php

use App\Models\Cad\Pessoa;
use App\Models\Cad\PessoaGrupo;
use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    public function run()
    {
        $pessoagrupos = PessoaGrupo::all();
        factory(Pessoa::class, 50)
            ->create()
            ->each(function(Pessoa $pessoa) use($pessoagrupos){
                $grupoid = $pessoagrupos->random()->id;
                $pessoa->pessoagrupos()->attach($grupoid);
            });
    }
}
