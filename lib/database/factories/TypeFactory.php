<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Type;
use Faker\Generator as Faker;

$factory->define(App\Model\Type::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
