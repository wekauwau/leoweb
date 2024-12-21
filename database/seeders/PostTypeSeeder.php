<?php

namespace Database\Seeders;

use App\Models\PostType;
use Illuminate\Database\Seeder;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [['Kegiatan'], ['Wawasan'], ['Berita']];

        foreach ($data as $item) {
            PostType::create([
                'name' => $item[0],
            ]);
        }
    }
}
