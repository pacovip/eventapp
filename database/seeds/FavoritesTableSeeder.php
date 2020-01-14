<?php

use Illuminate\Database\Seeder;
use App\Favorite;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Favorite::truncate();
        
        // Let's create user
        $favorite = new Favorite();
        $favorite->user_id = 1;
        $favorite->event_id = 1;
        $favorite->save();
        
        $favorite = new Favorite();
        $favorite->user_id = 1;
        $favorite->event_id = 2;
        $favorite->save();
    }
}
