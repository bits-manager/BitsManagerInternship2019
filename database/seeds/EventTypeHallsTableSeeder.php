<?php

use Illuminate\Database\Seeder;

class EventTypeHallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('event_type_halls')->insert([
            'description' =>'Services',
            'hall_id'=> 1,
            'eventType_id'=>1,
        ]); 
        //
    }
}
