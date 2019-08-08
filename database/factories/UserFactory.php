<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use GiftListNow\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => "Crhistian",
        'last_name' => "Lucumi",
        'email' => "clucumi@giftlistnow.com",
        'event_name' => "Mi Boda",
        'start_date' => "2019-01-01 00:00:01",
        'end_date' => "2019-12-31 23:59:59",  
        'event_code' => "9999",
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'name' => "Wilman",
        'last_name' => "Rojas",
        'email' => "wrojas@giftlistnow.com",
        'event_name' => "Mi Boda",
        'start_date' => "2019-01-01 00:00:01",
        'end_date' => "2019-12-31 23:59:59",  
        'event_code' => "9998",
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
