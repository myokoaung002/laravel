<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Song;
use App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory()->create([
            'id' => 1,
            'name' => 'HTML',
        ]);

        User::factory()->create([
            'name' => ' Alice',
            'email' => 'alice@gmail.com',
        ]);
        User::factory()->create([
            'name' => ' Bob',
            'email' => 'bob@gmail.com',
        ]);

         */
    }
}
