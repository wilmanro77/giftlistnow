<?php
use Illuminate\Database\Seeder;
use GiftListNow\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GiftListNow\User::insert([
            'name' => "Crhistian",
            'last_name' => "Lucumi",
            'email' => "clucumi@giftlistnow.com",
            'event_name' => "Mi Boda",
            'start_date' => "2019-01-01 00:00:01",
            'end_date' => "2019-12-31 23:59:59",  
            'event_code' => "9999",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'remember_token' => Str::random(10)
        ]);
        
        GiftListNow\User::insert([
            'name' => "Wilman",
            'last_name' => "Rojas",
            'email' => "wrojas@giftlistnow.com",
            'event_name' => "Mi Boda",
            'start_date' => "2019-01-01 00:00:01",
            'end_date' => "2019-12-31 23:59:59",  
            'event_code' => "9998",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'remember_token' => Str::random(10)
        ]);
       // factory(GiftListNow\User::class, 1)->create();
    }

}