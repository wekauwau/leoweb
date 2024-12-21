<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Jurnalistik', 7],
            ['HRD', 11],
            ['Humas', 15],
            ['Kaderisasi', 19],
            ['Orsen', 23],
            ['Media', 27],
            ['P2', 31],
            ['Danus', 35],
            ['Kesravo', 39],
            ['IT', 43],
        ];

        foreach ($data as $item) {
            Division::create([
                'name' => $item[0],
                'leader_member_id' => $item[1],
            ]);
        }
    }
}
