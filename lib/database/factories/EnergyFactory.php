<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Energy;
use Faker\Generator as Faker;

$factory->define(App\Model\Energy::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
