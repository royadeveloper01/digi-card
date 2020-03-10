<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ComplementaryCard;
use Faker\Generator as Faker;

$factory->define(ComplementaryCard::class, function (Faker $faker) {
    $filepath = storage_path('images');

    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }
    $image = $faker->image();
    $imageFile = new File($image);
    //$option = [350,200, null, false];
    return [
        //
        'user_id' => factory('App\User')->create()->id,
        'category_id' => factory('App\CardCategory')->create()->id,
        'comp_card_url' => $faker->unique()->image($filepath, 350, 200, null, false)

    ];
});
