<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            Post::factory()
                ->create([
                    'post_type_id' => 1,
                    'image_id' => $i,
                ]);
        }

        for ($i = 4; $i <= 6; $i++) {
            Post::factory()
                ->create([
                    'post_type_id' => 2,
                    'image_id' => $i,
                ]);
        }

        for ($i = 7; $i <= 9; $i++) {
            Post::factory()
                ->create([
                    'post_type_id' => 3,
                    'image_id' => $i,
                ]);
        }
    }
}
