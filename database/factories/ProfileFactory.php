<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'age' => $faker->numberBetween(18, 100),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'user_id' => factory(App\User::class)
    ];
});
