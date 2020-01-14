<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Let's truncate our existing records to start from scratch.
        Event::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 1; $i < 3; $i++) {
            Event::create([
                'type_id' => $i,
                'city_id' => $i,
                'town_id' => $i,
                'district_id' => $i,
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => '',
                'video' => '',
                'website_advertiser' => 'ww.example.com',
                'email_advertiser' => 'email@example.com',
                'contact_advertiser' => '+225 00010203',
                'date' => date('Y-m-d H:i:s'),
            ]);
        }
        
    }
}
