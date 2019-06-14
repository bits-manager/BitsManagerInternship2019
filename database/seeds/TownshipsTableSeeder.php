<?php

use Illuminate\Database\Seeder;

class TownshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('townships')->insert([
            'township_name' => 'Pyigyitagon',
            'city_id'=>1,
            'state_id'=>1,
        ]);////
    }
}
