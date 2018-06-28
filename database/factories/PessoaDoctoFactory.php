<?php

use App\Models\Cad\PessoaDocto;
use Faker\Generator as Faker;

$factory->define(PessoaDocto::class, function (Faker $faker) {
    return [
        'numero' => $faker->randomFloat(14),
        'dataemissao'=>$faker->dateTimeInInterval(),
        'dataemissao'=>$faker->dateTimeInInterval(),
        'orgaoemissor'=>$faker->colorName
    ];
});
