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
        //Admin
        User::create([
            'name' => 'Juan',
            'email' => 'centertek@gmail.com',
            'password' => bcrypt('123456u'),
            'role' => 0
        ]);

        //Admin
        User::create([
            'name' => 'Marcelo',
            'email' => 'gabytubio@gmail.com',
            'password' => bcrypt('123456u'),
            'role' => 0
        ]);

        //Support
        User::create([
            'name' => 'Maria',
            'email' => 'support@gmail.com',
            'password' => bcrypt('123456u'),
            'role' => 1
        ]);

        //Client
        User::create([
            'name' => 'Claudia',
            'email' => 'claudia@gmail.com',
            'password' => bcrypt('123456u'),
            'role' => 2
        ]);
    }
}
