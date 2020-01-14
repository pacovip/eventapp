<?php

use Illuminate\Database\Seeder;
use App\Events_type;

class EventstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Events_type::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 1; $i <= 3; $i++) {
            Events_type::create([
                'name' => 'Type Event '.$i,
                'description' => $faker->sentence,
            ]);
        }
    }
}
