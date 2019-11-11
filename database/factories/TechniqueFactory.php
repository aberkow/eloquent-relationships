<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Technique;
use Faker\Generator as Faker;

$factory->define(Technique::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'owner_id' => factory(App\User::class)
    ];
});
