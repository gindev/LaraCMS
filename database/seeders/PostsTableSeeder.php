<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::find(1);

        $admin->pages()->saveMany([
            new Post([
                'title' => 'Blog Post 1',
                'slug' => 'blog-post-1',
                'excerpt' => 'Blog Post 1 Excerpt',
                'body' => 'This is the first blog post.'
            ]),
            new Post([
                'title' => 'Blog Post 2',
                'slug' => 'blog-post-2',
                'excerpt' => 'Blog Post 2 Excerpt',
                'body' => 'This is the second blog post.'
            ]),
            new Post([
                'title' => 'Blog Post 3',
                'slug' => 'blog-post-3',
                'excerpt' => 'Blog Post 3 Excerpt',
                'body' => 'This is the third blog post.'
            ]),
        ]);
    }
}
