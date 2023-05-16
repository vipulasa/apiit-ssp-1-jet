<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $roles = [
            [
                'name' => 'Admin',
                'status' => true,
            ],
            [
                'name' => 'Moderator',
                'status' => true,
            ],
            [
                'name' => 'User',
                'status' => true,
            ],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }

        // create a user model with the role_id as 2
        (new \App\Models\User)->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'role_id' => 1,
        ]);
    }
}
