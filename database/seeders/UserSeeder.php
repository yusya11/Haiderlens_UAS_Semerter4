<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                
                'username' => 'yusya',
                'name' => 'haidar yusya',
                'level' => 'admin',
                'password' => Hash::make('111202')
            ],
            [
                'username'=>'user1',
                'name'=>'AkunUser1',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'user2',
                'name'=>'AkunUser2',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
