<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articles;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text(500),
        'user_id' => $faker->numberBetween(1,User::count()),
    ];
});
