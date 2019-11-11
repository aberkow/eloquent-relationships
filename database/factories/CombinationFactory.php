<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Combination;
use Faker\Generator as Faker;

$factory->define(Combination::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'owner_id' => factory(App\User::class)
    ];
});
