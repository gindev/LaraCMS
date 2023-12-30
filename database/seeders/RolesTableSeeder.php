<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);
        Role::create(['name' => 'author']);
    }
}
