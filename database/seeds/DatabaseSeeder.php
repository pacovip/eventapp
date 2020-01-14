<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(EventstypesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TownsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
    }
}
