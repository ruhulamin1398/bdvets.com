<?php

use Illuminate\Database\Seeder;

class FarmerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmers')->insert([
            [
                'name' => 'saif',
                'village_id' => 1,
                'phone'=>'01840000408'
            ],
            

        ]);
    }
}
