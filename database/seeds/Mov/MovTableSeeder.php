<?php

use Illuminate\Database\Seeder;

class MovTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = \App\Models\Cad\Pessoa::all();
        factory(\App\Models\Mov\Mov::class, 10)
            ->make()
            ->each(function ($input) use ($pessoas)
            {
                $input->pessoa_id = $pessoas->random()->id;
                $input->save();
                }
            );
    }
}
