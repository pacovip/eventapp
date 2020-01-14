<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        City::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 1; $i < 3; $i++) {
            City::create([
                'name' => 'City '.$i,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
