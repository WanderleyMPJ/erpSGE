<?php

use App\Models\Cad\PessoaDoctoTipo;
use Faker\Generator as Faker;

$factory->define(PessoaDoctoTipo::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName
    ];
});
