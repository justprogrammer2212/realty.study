<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Categories;
use App\Models\Offers;
use App\User;
use Illuminate\Support\Str;
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

$factory->define(Offers::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'price' => $faker->numberBetween(10000,100000),
        'currency' => $faker->randomElement(Offers::$offer_currency),
        'description' => $faker->text(500),
        'category_id' => $faker->numberBetween(1,Categories::count()),
        'user_id' => $faker->numberBetween(1,User::count()),
    ];
});
