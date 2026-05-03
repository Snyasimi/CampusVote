<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\positions;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPositions = [
            'Chairperson',
            'Vice-Chair',
            'Secretary',
            'Sports and Welfare',
            'Academic',
        ];

        foreach ($defaultPositions as $name) {
            positions::firstOrCreate(['name' => $name]);
        }
    }
}
