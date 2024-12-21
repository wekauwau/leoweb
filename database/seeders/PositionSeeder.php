<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Pengurus harian
            [1, 1, null],
            [2, 2, null],
            [3, 3, null],
            [4, 4, null],
            [5, 5, null],
            [6, 6, null],
        ];

        $divisionId = 1; // Start with division ID 1
        for ($i = 7; $i <= 46; $i++) {
            $data[] = [$i, null, $divisionId];
            if (($i - 6) % 4 === 0) { // Every 4 entries, increment the division ID
                $divisionId++;
            }
        }

        foreach ($data as $item) {
            Position::create([
                'member_id' => $item[0],
                'executive_id' => $item[1],
                'division_id' => $item[2],
            ]);
        }
    }
}
