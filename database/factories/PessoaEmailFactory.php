<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\PessoaEmail::class, function (Faker $faker) {
    return [
        'descricao' => $faker->randomElement(['FINANCEIRO', 'COMERCIAL']),
        'email' => $faker->companyEmail
        ];
});
