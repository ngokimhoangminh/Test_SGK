<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => '1',
            'remember_token' => 'administrator'
        ]);
        User::create([
            'name' =>'HoangMinh',
            'email' => 'hoangminhcp10@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '2',
            'remember_token' => 'manager'
        ]);

        User::create([
            'name' =>'HoangNam',
            'email' => 'hoangnam@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => '3',
            'remember_token' => 'customer'
        ]);
    }
}
