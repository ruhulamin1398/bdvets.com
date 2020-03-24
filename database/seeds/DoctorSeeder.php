<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            [
                'name' => 'habiganj upzilla Office',
                'bn_name' => 'habiganj upzilla Office',
                'email' => 'habiganj.gmail.com',
                'address' => '
                     lorem  Lorem ipsum, dolor sit am
                    et consectetur adipisicing elit
                 ',
                'bn_address' => '
                     lorem  Lorem ipsum, dolor sit am
                    et consectetur adipisicing elit
                 ',

                'phone' => '018452656556',
                'division_id' => 1,
                'district_id' => 1,
                'upazilla_id' => 1,
                'union_id' => 1
            ],

        ]);










        DB::table('doctor_profiles')->insert([
            [
                'id' =>3,
                'name' => 'Dr. Ruhul Amin',
                'bn_name' => 'Dr. Ruhul Amin',
                'degree_varsity' => 'DVM, Sau',
                'bn_degree_varsity' => 'DVM, Sau',
                'phone' => '018452656556',
                'reg_no' => '125'
               
            ],

        ]);
    }







}
