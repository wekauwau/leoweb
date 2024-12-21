<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // INFO:  1 -  6 = pengurus harian
        // INFO:  7 - 46 = pengurus divisi

        $base = '24';
        for ($i = 1; $i <= 47; $i++) {
            Member::factory(1)->create([
                'student_id' => $base.sprintf('%02d', $i),
            ]);
        }
    }
}
