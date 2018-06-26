<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\Pessoa::class, function (Faker $faker) {
    return [
        'nome' => $faker->Name,

    ];
});
