<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        District::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 1; $i < 3; $i++) {
            District::create([
                'town_id' => $i,
                'name' => 'District '.$i,
                'description' => $faker->sentence,
            ]);
        }
    }
}
