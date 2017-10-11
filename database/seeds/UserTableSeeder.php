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
        User::create([
            'name' => 'a',
            'email' => 'a@hotmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'b',
            'email' => 'b@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
