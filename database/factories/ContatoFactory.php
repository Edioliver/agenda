<?php

use Faker\Generator as Faker;


$factory->define(App\Contato::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->cellphoneNumber,
    ];
});
