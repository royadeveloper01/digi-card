<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SendCard;
use Faker\Generator as Faker;

$factory->define(SendCard::class, function (Faker $faker) {
    return [
        //
        'sender_id' => factory('App\User')->create()->id,
        'receiver_email' => factory('App\User')->create()->email,
        'card_url' => factory('App\ComplementaryCard')->create()->comp_card_url

    ];
});
