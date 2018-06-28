<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->century,
        'ean'=> $faker->ean13,
        'tipo'=>$faker->randomElement(['PRODUTO', 'SERVICO'])
    ];
});

