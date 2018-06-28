<?php

use Illuminate\Database\Seeder;

class PessoaDependenteTipoTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'FILHO(A)'
        ]);

        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'CONJUGE'
        ]);

        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'PAI'
        ]);

        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'MAE'
        ]);

        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'SOCIO TITULAR'
        ]);

        factory(\App\Models\Cad\PessoaDependenteTipo::class, 1)->create([
            'nome'=> 'ADMINISTRADOR'
        ]);

    }
}
