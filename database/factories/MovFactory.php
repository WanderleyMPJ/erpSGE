<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Mov\Mov::class, function (Faker $faker) {
    return [
        'documento' => $faker->randomNumber(6),
        'mov_nat_operacao_id' => 1,
        'data' => $faker->dateTime,
        'valorbruto'=>$faker->randomFloat(4, 2)
    ];
});
