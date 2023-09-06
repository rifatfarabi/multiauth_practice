<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('password'),
        ];

        User::create($users);
    }
}
