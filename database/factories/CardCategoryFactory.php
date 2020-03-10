<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CardCategory;
use Faker\Generator as Faker;

$factory->define(CardCategory::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->unique()->word(),
        'description' => $faker->sentence()

    ];
});
