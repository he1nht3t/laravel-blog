<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 categories
        Category::factory(5)->create();

        // Create 3 users
        User::factory(3)->create();

        // Create 10 posts with unique category and user associations
        Post::factory(30)->create();

        // Create 100 comments with unique post and user associations
        Comment::factory(100)->create();

    }
}
