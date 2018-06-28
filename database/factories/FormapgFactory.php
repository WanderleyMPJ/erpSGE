<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cad\Formapg::class, function (Faker $faker) {
    return [
        'nome' => $faker->domainWord
    ];
});
