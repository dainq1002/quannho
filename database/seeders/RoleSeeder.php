<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles =[
            ['name'=>Role::ADMIN],
            ['name'=>Role::USER]
        ];
        foreach ($roles as $role){
            \App\Models\Role::create($role);
        }
    }
}
