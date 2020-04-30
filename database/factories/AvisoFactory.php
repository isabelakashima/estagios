<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aviso;
use Faker\Generator as Faker;

$factory->define(Aviso::class, function (Faker $faker) {
    $faker->addProvider(new \JansenFelipe\FakerBR\FakerBR($faker));

    return [
        'titulo' => $faker->sentence,
        'corpo' => $faker->sentence, 
        'divulgacao_home_ate' => $faker->date,
    ];
});
