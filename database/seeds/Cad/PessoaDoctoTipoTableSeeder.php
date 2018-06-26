<?php

use App\Models\Cad\PessoaDoctoTipo;
use Illuminate\Database\Seeder;

class PessoaDoctoTipoTableSeeder extends Seeder
{
    public function run()
    {
       factory(PessoaDoctoTipo::class, 1)->create([
                'nome'=> 'CNPJ'
            ]);

        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'CPF'
            ]);

        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'RG'
            ]);
        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'INSCRICAO_ESTADUAL'
            ]);
        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'HABILITACAO'
            ]);
        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'OAB'
            ]);
        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'CRC'
            ]);
        factory(PessoaDoctoTipo::class, 1)
            ->create([
                'nome'=> 'TITULO'
            ]);

    }
}
