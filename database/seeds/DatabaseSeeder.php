<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        User::create([
            'name' => 'client1',
            'email' => 'client1@gm.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10)
        ]);
        
         User::create([
            'name' => 'client2',
            'email' => 'client2@gm.com',
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10)
        ]);
        
    }
}
