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
            'name' => 'Wallmart',
            'details' => 'Large area general purpose shop',
            'description' => 'Great for people with big needs.',
            'price' => 150000,
            'category' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'Tesco',
            'details' => 'Large area general purpose shop',
            'description' => 'Great for people with big needs.',
            'price' => 250000,
            'category' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'InNout',
            'details' => 'Small area fast-food shop chain',
            'description' => 'Great for people with big guts and immense apetite.',
            'price' => 100000,
            'category' => 1
        ]);
    }
}
