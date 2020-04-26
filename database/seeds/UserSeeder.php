<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'password' => Hash::make('admin1234')
        ]);

        DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@employee.com',
            'is_employee' => true,
            'password' => Hash::make('employee1234')
        ]);
    }
}
