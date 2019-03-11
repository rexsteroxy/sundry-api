<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        factory(App\JobListing::class, 10)->create();
        factory(App\FormComponent::class, 10)->create();
        factory(App\SocialShare::class, 10)->create();
    }
}
