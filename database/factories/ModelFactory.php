<?php

use App\Models\Businesses;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Businesses seed factory
$factory->define(Businesses::class, function (Faker\Generator $faker) {
    return [
        'name'              => isset($name) ?: $name = $faker->company,
        'street_address'    => isset($street_address) ?: $street_address = $faker->streetAddress,
        'country'           => isset($country) ?: $country = $faker->country,
        'state'             => isset($state) ?: $state = $faker->state,
        'city'              => isset($city) ?: $city = $faker->city,
        'postal_code'       => isset($postal_code) ?: $postal_code = $faker->postcode,
        'longitude'         => isset($longitude) ?: $longitude = $faker->longitude($min = -180, $max = 180),
        'latitude'          => isset($latitude) ?: $latitude = $faker->latitude($min = -90, $max = 90),
    ];
});
