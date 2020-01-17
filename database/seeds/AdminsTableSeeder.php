<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Admin::truncate();
        
        $user = new Admin();
        $user->name = 'Admin 01';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
