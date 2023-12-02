<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        User::create([
            'name'=>'Foyzur Rahman Ridoy',
            'email'=>'ridoy@gmail.com',
            'password' =>bcrypt('12345'),
        ]);
    }
}
