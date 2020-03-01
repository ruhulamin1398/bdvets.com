<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('divisions')->insert([
            [
                'name' => 'Sylhet',
                'bn_name' => 'sylhet',
                'url' => 'ssdfsaf'
            ],

        ]);
        
        DB::table('districts')->insert([
            [
                'name' => 'habiganj',
                'bn_name' => 'habiganj',
                'division_id' => 1,
                'url' => 'Admin'
            ],

        ]);
        
        DB::table('upazillas')->insert([
            [
                'name' => 'Habiganj_sadar',
                'bn_name' => 'habiganj',
                'district_id' => 1,
                'url' => 'Admin'
            ],

        ]);
        
        DB::table('unions')->insert([
            [
                'name' => 'Richi_up',
                'bn_name' => 'Richi',
                'upazilla_id' => 1,
                'url' => 'Admin'
            ],

        ]);
        
        DB::table('villages')->insert([
            [
                'name' => 'Richi',
                'bn_name' => 'Richi',
                'union_id' => 1,
                'url' => 'Admin'
            ],

        ]);
        
        
    }
}
