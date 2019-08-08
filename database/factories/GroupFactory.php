<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->realText(rand(80, 250)),
        'amount' => $faker->numberBetween(1000, 9000),
        'private' => $faker->boolean,
    ];
});
