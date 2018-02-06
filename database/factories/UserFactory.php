<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Patient::class, function (Faker $faker) {
    $jmbg = $faker->unique()->randomNumber(8) . $faker->unique()->randomNumber(5);
    return [
        'pat_name' => $faker->firstName,
        'pat_surname' => $faker->lastName,
        'JMBG' => $jmbg
    ];
});

$factory->define(App\Doctors::class, function (Faker $faker) {
    return [
        'doc_name' => $faker->firstName,
        'doc_surname' => $faker->lastName
    ];
});

$factory->define(App\Records::class, function (Faker $faker) {
    $rec_types = ['thyroid', 'blood', 'test_record'];

    return [
        'record_type' => $rec_types[$faker->numberBetween(0, 2)],
        'pat_id' => function() {
            return factory(App\Patient::class)->create()->id;
        },
        'doc_id' => function() {
            return factory(App\Doctors::class)->create()->id;
        }
    ];
});
