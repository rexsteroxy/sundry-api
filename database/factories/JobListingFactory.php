<?php

use Faker\Generator as Faker;

$factory->define(App\JobListing::class, function (Faker $faker) {
    $user_ids = DB::table('users')->pluck('id')->all();
    $title = ['Job Vacancy','Entry level employment','Senior staff search', 'Sucess partners wanted','Inhouse developer wanted'];
    $positions = ['Supply Chain Officer','Restaurant Management Trainee', 
        'HR Administrator', 'Recruitment Manager','Head, Marketing', 
        'Restaurant Management Trainee', 'Administrative Officer', 'Unit Accountant' ];
    $locations = ['Lagos','Abuja','Port Harcourt', 'Calabar'];
    $requirements = ['PHD', 'Bachelors Degree', 'Culinary Skills'];

    return [
        'user_id' => $faker->randomElement($user_ids),
         'title' => $faker->randomElement($title),
         'description' => $faker->realText(100),
         'position' => $faker->randomElement($positions),
         'requirements' => $faker->randomElement($requirements),
         'location' => $faker->randomElement($locations)
         
    ];
});



