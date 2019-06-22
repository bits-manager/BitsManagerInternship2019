<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    DB::table('contacts')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'subject' => Str::random(10),
            'message' => Str::random(10),
        ]);
        //
    }
}
