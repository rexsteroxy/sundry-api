<?php

use Faker\Generator as Faker;

$factory->define(App\JobListing::class, function (Faker $faker) {
    $user_ids = DB::table('users')->pluck('id')->all();
    $positions = ['Entry','Manager', 'Director','Staff'];
    $locations = ['Lagos','Abuja','Port Harcourt', 'Calabar'];
    $requirements = ['PHD', 'Bachelors Degree', 'Culinary Skills'];

    return [
        'user_id' => $faker->randomElement($user_ids),
         'title' => $faker->realText(30),
         'description' => $faker->realText(100),
         'position' => $faker->randomElement($positions),
         'requirements' => $faker->randomElement($requirements),
         'location' => $faker->randomElement($locations),
         'status' => 1  ,
         'delete' => 0
    ];
});



