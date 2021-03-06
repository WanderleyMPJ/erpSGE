<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PessoaGruposTableSeeder::class);
         $this->call(PessoaTableSeeder::class);
         $this->call(PessoaDoctoTipoTableSeeder::class);
         $this->call(PessoaDoctosTableSeeder::class);
         $this->call(PessoaTelefoneTableSeeder::class);
         $this->call(PessoaEmailTableSeeder::class);
         $this->call(PessoaDependenteTipoTableSeeder::class);
         $this->call(PessoaDependenteTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
         $this->call(ProdutoGrupoTableSeeder::class);
         $this->call(ProdutoTableSeeder::class);
         $this->call(MovNatOperacaoTableSeeder::class);
    }
}
