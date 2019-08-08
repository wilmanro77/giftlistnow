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
        factory(GiftListNow\User::class, 1)->create();
    }

}