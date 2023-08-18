<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fullName' => 'Super Admin',
                'address' => fake()->address,
                'avt' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png',
                'email' => 'admin@gmail.com',
                'phoneNumber' => '0989889889',
                'status' => UserStatus::ACTIVE,
                'role_id' => 1,
                'password' => env('APP_PASSWORD_DEFAULT', '123123'),
            ],
            [
                'fullName' => 'Super User',
                'address' => fake()->address,
                'avt' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/2048px-User-avatar.svg.png',
                'email' => 'user@gmail.com',
                'phoneNumber' => '0898668668',
                'status' => UserStatus::ACTIVE,
                'role_id' => 2,
                'password' => env('APP_PASSWORD_DEFAULT', '123123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
