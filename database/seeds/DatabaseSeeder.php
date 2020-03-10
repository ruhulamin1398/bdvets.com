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
        
        $this->call(DivisionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FarmerTableSeeder::class);
        $this->call(DoctorSeeder::class);


    }
}
