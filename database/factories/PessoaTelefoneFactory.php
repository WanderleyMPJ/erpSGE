<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\PessoaTelefone::class, function (Faker $faker) {
    return [
        'descricao' => $faker->randomElement(['FINANCEIRO', 'COMERCIAL']),
        'numero' => preg_replace("/\D+/","", $faker->phoneNumber)
    ];
});
