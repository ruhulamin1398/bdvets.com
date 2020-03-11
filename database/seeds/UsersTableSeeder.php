<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('roles')->insert([
            [
                'role' => 'Admin'
            ],
            [
                'role' => 'doctor'
            ],
            [
                'role' => 'pharmacy'
            ],
            [
                'role' => 'user'
            ],

        ]);
        DB::table('users')->insert([
            [
                'name' => 'Ruhul',
                'email' => 'ruhul.ok@gmail.com',
                'password' => Hash::make(1234),
                'role_id' => 1,
                'status' => 1
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(1234),
                'role_id' => 1,
                'status' => 1
            ],
            [
                'name' => 'doctor',
                'email' => 'doctor@gmail.com',
                'password' => Hash::make(1234),
                'role_id' => 2,
                'status' => 1
            ],
            [
                'name' => 'pharmacy',
                'email' => 'pharmacy@gmail.com',
                'password' => Hash::make(1234),
                'role_id' => 3,
                'status' => 1
            ],

        ]);

    }
}
