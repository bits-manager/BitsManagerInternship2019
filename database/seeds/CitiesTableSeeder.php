<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert([
            'city_name' => 'Mandalay',
            'state_id'=>1,

        ]);//
        //
    }
}
 