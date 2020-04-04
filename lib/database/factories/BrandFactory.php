<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Brand;
use Faker\Generator as Faker;

$factory->define(App\Model\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
