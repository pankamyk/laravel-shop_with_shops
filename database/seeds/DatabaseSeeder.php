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
        // $this->call(UsersTableSeeder::class);

        DB::table('products')->insert([
            'name' => 'Walmart',
            'details' => 'Large area general purpose shop',
            'description' => 'Great for people with big needs.',
            'price' => 150000,
            'url' => 'https://www.thedailymeal.com/sites/default/files/styles/original/public/story/2017/wamaart-main.JPG?itok=nkD5OTbe',
            'category' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'Tesco',
            'details' => 'Large area general purpose shop',
            'description' => 'Great for people with big needs.',
            'price' => 250000,
            'url' => 'https://s3-eu-central-1.amazonaws.com/centaur-wp/marketingweek/prod/content/uploads/2016/03/14123504/Tesco.png',
            'category' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'CoffeShop',
            'details' => 'Small area fast-food and coffe shop chain',
            'description' => 'Great for people with big guts and immense apetite.',
            'price' => 100000,
            'url' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F4%2F4a%2FAMS_coffe_shop_ro.JPG&f=1&nofb=1',
            'category' => 1
        ]);
    }
}
