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

$factory->define(App\student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'Last_name'  => $faker->name,                   /*unique()->safeEmail,"for email*/     
        'created_at' => new DateTime(),         /*'email_verified_at' => now(),"for verify email*/
        /*'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret*/
        /*'remember_token' => str_random(10),*/
        'updated_at' => new DateTime(),
    ];
});
