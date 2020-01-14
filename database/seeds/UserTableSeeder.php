<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();
        
        // Let's create user
        $user = new User();
        $user->firstname = 'User First Name';
        $user->lastname = 'User Last name';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        
        $user = new User();
        $user->firstname = 'User First Name';
        $user->lastname = 'User Last name';
        $user->email = 'user2@example.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
