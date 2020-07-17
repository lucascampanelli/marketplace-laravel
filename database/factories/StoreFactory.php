<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Store::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'telefone' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber,
        'slug' => $faker->slug,
    ];
});
