<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PagesTableSeeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\UsersTableSeeder;

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

        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PagesTableSeeder::class,
            PostsTableSeeder::class,
        ]);
    }
}
