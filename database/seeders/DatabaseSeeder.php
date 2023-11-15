<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
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
        Category::truncate();
        User::truncate();
        Post::truncate();

        // Post::factory(5)->create();

        $user = User::factory()->create();
        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();

        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $cat1->id
        ]);

        Post::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat2->id
        ]);
    }
}
