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
                'name' => 'Upazila Livestock office',
                'bn_name' => 'উপজেলা প্রানিসম্পদ দপ্তর',
                'email' => 'habiganj.gmail.com',
                'address' => '
                Narsangdi sador,Narsingdi
                 ',
                'bn_address' => '
                নরসিংদী সদর,নরসিংদী
                 ',

                'phone' => '6546544',
                'division_id' => 1,
                'district_id' => 1,
                'upazilla_id' => 1,
                'union_id' => 1
            ],

        ]);










        DB::table('doctor_profiles')->insert([
            [
                'id' =>3,
                'name' => ' Dr . mitun sarkar',
                'bn_name' => ' ডাঃ মিঠুন সরকার ',
                'degree_varsity' => 'DVM (SAU)',
                'bn_degree_varsity' => 'ডি.ভি.এম.(সি.ক্র.বি.)',
                'other_degree' => 'BCS (Livestock)',
                'bn_other_degree' => 'বি.সি.এস.(প্রানি সম্পদ)',
                'phone' => '018452656556',
                'reg_no' => '3210'
               
            ],

        ]);
    }







}
