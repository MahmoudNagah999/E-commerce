<?php

namespace Database\Seeders;

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
        User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Mn@123456'),
            'role' => 'admin',
        ]);

        User::query()->create([
            'name' => 'Customer',
            'email' => 'user@user.com',
            'password' => bcrypt('Mn@123456'),
            'role' => 'customer',
        ]);
    }
}
