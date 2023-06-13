<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@pweb.com',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'User',
                'email' => 'user@pweb.com',
                'password' => bcrypt('user'),
            ],
        ];

        User::insert($users);
    }
}
