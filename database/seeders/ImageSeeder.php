<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kegiatan-00.jpg'],
            ['kegiatan-01.jpg'],
            ['kegiatan-02.jpg'],

            ['wawasan-00.jpg'],
            ['wawasan-01.jpg'],
            ['wawasan-02.jpg'],

            ['berita-00.webp'],
            ['berita-01.jpg'],
            ['berita-02.webp'],
        ];

        foreach ($data as $item) {
            Image::create([
                'name' => $item[0],
                'alt' => 'YNKTS',
            ]);
        }
    }
}
