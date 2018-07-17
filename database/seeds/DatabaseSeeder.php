<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PlanocontaTableSeeder::class);
         $this->call(PessoaGruposTableSeeder::class);
         $this->call(PessoaTableSeeder::class);
         $this->call(PessoaDoctoTipoTableSeeder::class);
         $this->call(PessoaDoctosTableSeeder::class);
         $this->call(PessoaTelefoneTableSeeder::class);
         $this->call(PessoaEmailTableSeeder::class);
         $this->call(PessoaEnderecoTableSeeder::class);
         $this->call(PessoaDependenteTipoTableSeeder::class);
         $this->call(PessoaDependenteTableSeeder::class);
         $this->call(EmpresaTableSeeder::class);
         $this->call(ProdutoGrupoTableSeeder::class);
         $this->call(ProdutoTableSeeder::class);
         $this->call(MovNatOperacaoTableSeeder::class);
         $this->call(CcTipoTableSeeder::class);                          //MANTER
         $this->call(CcTableSeeder::class);
         $this->call(CcBancoTableSeeder::class);
         $this->call(CcBancoCobrancaTableSeeder::class);
         $this->call(FormapgTipoTableSeeder::class);
         $this->call(FormapgTableSeeder::class);
         $this->call(FormapgParcelasTableSeeder::class);

         // *****mov
//         $this->call(MovTableSeeder::class);

    }
}
