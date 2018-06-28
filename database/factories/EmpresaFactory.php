<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\Empresa::class, function (Faker $faker) {
    return [
        'nome' => $faker->company,
        ];
});
