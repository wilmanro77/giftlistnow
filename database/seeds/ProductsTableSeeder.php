<?php
use Illuminate\Database\Seeder;
use GiftListNow\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GiftListNow\Product::class, 50)->create();
    }

}