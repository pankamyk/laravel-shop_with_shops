<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
            'password' => Hash::make('admin1234')
            //'email_verified_at' => $now->getTimestamp()
        ]);

        DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@employee.com',
            'is_employee' => true,
            'password' => Hash::make('employee1234')
            //'email_verified_at' => $now->getTimestamp()
        ]);

        $admin = User::where('email', 'admin@admin.com')->first();
        $admin->markEmailAsVerified();

        $employee = User::where('email', 'employee@employee.com')->first();
        $employee->markEmailAsVerified();
    }
}
