<?php

use App\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{

    public function run()
    {
        Semester::create([
            'name' => 'SEMESTER ONE',
            'start_date' => rand(2023, 2024) . '-' . rand(1, 12) . '-' . rand(1, 28),
            'end_date' => '2024-' . rand(1, 12) . '-' . rand(1, 28),
        ]);

        Semester::create([
            'name' => 'SEMESTER TWO',
            'start_date' => rand(2023, 2024) . '-' . rand(1, 12) . '-' . rand(1, 28),
            'end_date' => '2024-' . rand(1, 12) . '-' . rand(1, 28),
        ]);

        Semester::create([
            'name' => 'SUMMER',
            'start_date' => rand(2023, 2024) . '-' . rand(1, 12) . '-' . rand(1, 28),
            'end_date' => '2024-' . rand(1, 12) . '-' . rand(1, 28),
        ]);
    }
}
