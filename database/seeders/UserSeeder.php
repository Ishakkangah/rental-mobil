<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name'  =>  'admin',
            'email' =>  'admin@admin.com',
            'password'  =>  bcrypt('password'),
            'is_admin'  =>  1,
        ]);
        
        userdetail::create([
            'user_id' =>  $user->id,
        ]);
    }
}
