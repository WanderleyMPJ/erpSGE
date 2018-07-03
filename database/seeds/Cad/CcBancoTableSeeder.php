<?php

use Illuminate\Database\Seeder;

class CcBancoTableSeeder extends Seeder
{

    public function run()
    {
        \App\Models\Cad\CcBanco::create([
            'cc_id' => 2,
            'numero' => 341,
            'agencia' => 001,
            'conta'=> 0003
        ]);

        \App\Models\Cad\CcBanco::create([
            'cc_id' => 3,
            'numero' => 033,
            'agencia' => 001,
            'conta'=> 0003
        ]);
    }
}
