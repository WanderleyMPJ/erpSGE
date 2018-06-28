<?php

use App\Models\Cad\Produto;
use App\Models\Cad\ProdutoGrupo;
use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    public function run()
    {
        $produtogrupos = ProdutoGrupo::all();
        factory(Produto::class, 30)
            ->create()
            ->each(function(Produto $produto) use($produtogrupos){
                $grupoid = $produtogrupos->random()->id;
                $produto->produtogrupos()->attach($grupoid);
            });
    }
}
