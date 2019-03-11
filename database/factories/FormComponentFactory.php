<?php

use Faker\Generator as Faker;

$factory->define(App\FormComponent::class, function (Faker $faker) {
   $components = ['<input type="text" id="textfield" name="textfield">',
        '<textarea name="message" rows="10" cols="30">',
        '<button type="button" name="button" id="button'
            ];

    return [
        'component' => $faker->randomElement($components),
        'component_id' => 'text',
        'component_name' => 'text'
    ];
});

           