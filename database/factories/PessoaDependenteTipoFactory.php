<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\PessoaDependenteTipo::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName
    ];
});
