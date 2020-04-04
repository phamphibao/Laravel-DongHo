<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Products;
use Faker\Generator as Faker;

$factory->define(App\Model\Products::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price'=> $faker->randomFloat,
        'idBrand' => factory(App\Model\Brand::class),
        'idEnergy' => factory(App\Model\Energy::class),
        'sizeGlass' =>  $faker->randomFloat,
        'glassMaterial' => $faker->word,
        'idStrap' => factory(App\Model\straps::class),
        'resistance' => $faker->buildingNumber,
        'guarantee' => $faker->randomDigitNot(5),
        'idType' => factory(App\Model\Type::class),
    ];
});
