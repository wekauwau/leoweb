<?php

namespace Database\Seeders;

use App\Models\Executive;
use Illuminate\Database\Seeder;

class ExecutiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Ketua'],
            ['Wakil Ketua'],
            ['Sekretaris I'],
            ['Sekretaris II'],
            ['Bendahara I'],
            ['Bendahara II'],
        ];

        foreach ($data as $item) {
            Executive::create([
                'name' => $item[0],
            ]);
        }
    }
}
