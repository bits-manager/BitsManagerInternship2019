<?php

use Illuminate\Database\Seeder;

class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('halls')->insert([
            'hall_name' => 'Yar Shin Hotel & Hall',
            'address'=>'Yangon/Mandalay Old Road,Corner of the Park Sethmu(1)',
            'phone_no'=>'092023584',
            'open_time'=>'9am',
            'close_time'=>'12pm',
            'city_id'=>1,
            'state_id'=>1,
            'township_id'=>1,
        ]);//
        //
    }
}
