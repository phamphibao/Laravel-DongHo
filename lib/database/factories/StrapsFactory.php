<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\straps;
use Faker\Generator as Faker;

$factory->define(App\Model\straps::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
