<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
    	\DB::table('addresses')->insert([
            'address' => '1481 Creekside Lane Avila Beach, CA 93424',
            'phone'=>'+53 345 7953 32453',
            'email'=>'you@gmail.com',
            
          ]);  
        //
    }
}
