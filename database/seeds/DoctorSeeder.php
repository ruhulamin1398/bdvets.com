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
                'email' => 'habiganj.gmail.com',
                'about' => '
                     lorem  Lorem ipsum, dolor sit am
                    et consectetur adipisicing elit. Quae minima eos, repellat, cum blanditiis aute
                    m praesentium sit aperiam in dolor 
                    provident ipsam tempora asperiores! Quasi officiis nostrum sequi error excepturi 
                    mollitia, earum qui possimus doloremque quas quos obcaecati dolorum dolores?
                     Tenetur tempore sed, accusamus ipsam sit omnis illum placeat doloremque?
                 ',

                'phone' => '018452656556',
                'division_id' => 1,
                'district_id' => 1,
                'upazilla_id' => 1,
                'union_id' => 1
            ],

        ]);
    }
}
