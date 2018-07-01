<?php

use Illuminate\Database\Seeder;

class PlanocontaTableSeeder extends Seeder
{
    public function run()
    {
        $nv1 = App\Models\Cad\Planoconta::create([
           'codigo' => '1',
           'nome' => 'Receitas'
        ]);
            $nv2 = App\Models\Cad\Planoconta::create([
                'codigo' => '1.1',
                'nome' => 'Receita Operacional',
                'parent_id' => $nv1->id
            ]);
                 $nv3 = App\Models\Cad\Planoconta::create([
                    'codigo' => '1.1.01',
                    'nome' => 'Serviços',
                    'parent_id' => $nv2->id
                 ]);

                    App\Models\Cad\Planoconta::create([
                        'codigo' => '1.1.01.01',
                        'nome' => 'Serviços de Informática',
                        'parent_id' => $nv3->id
                    ]);

    }
}
