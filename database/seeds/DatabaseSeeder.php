<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TownshipsTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        $this->call(HallsTableSeeder::class);
        $this->call(EventTypeHallsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(AddressTableSeeder::class);
    }
}
