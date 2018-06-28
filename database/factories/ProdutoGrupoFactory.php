<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\ProdutoGrupo::class, function (Faker $faker) {
    return [
        'nome' => $faker->colorName
    ];
});
