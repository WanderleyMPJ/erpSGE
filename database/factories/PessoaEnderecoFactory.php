<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\PessoaEndereco::class, function (Faker $faker) {
    return [
        'descricao' => $faker->randomElement(['FINANCEIRO', 'COMERCIAL']),
        'logradouro' => $faker->streetAddress,
        'cep' => $faker->postcode,
        'municipio' => $faker->city,
        'uf' => "RO",
        'bairro' => $faker->citySuffix
    ];
});
