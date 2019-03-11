<?php

use Faker\Generator as Faker;

$factory->define(App\SocialShare::class, function (Faker $faker) {
    $listing_ids = DB::table('job_listings')->pluck('id')->all();
    return [
        'listing_id' => $faker->unique()->randomElement($listing_ids),
        'whatsapp_share' => 'jfjjfjfjfjf',
        'facebook_share' => 'kgggggggggggggkhkhk',
        'twitter_share' => 'jggjgjjgjgj'
        
    ];
});

