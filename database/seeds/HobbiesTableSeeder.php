<?php

use Illuminate\Database\Seeder;
use App\Hobby;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Hobby::truncate();
        
        // Let's create user
        $hobbie = new Hobby();
        $hobbie->type_id = 1;
        $hobbie->city_id = 1;
        $hobbie->town_id = 1;
        $hobbie->district_id = 1;
        $hobbie->save();
        
        $hobbie = new Hobby();
        $hobbie->type_id = 2;
        $hobbie->city_id = 1;
        $hobbie->town_id = 1;
        $hobbie->district_id = 1;
        $hobbie->save();
    }
}
