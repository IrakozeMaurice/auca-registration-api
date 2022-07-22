<?php

use App\Clearance;
use App\Student;
use Illuminate\Database\Seeder;

class ClearanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();
        foreach ($students as $student) {
            Clearance::create([
                'student_id' => $student->id,
                'general' => rand(25, 38),
                'major' => rand(100, 141),
                'dean' => rand(0, 1),
                'books' => rand(0, 2),
                'it' => rand(0, 1),
                'student_services' => rand(0, 1),
                'business' => rand(0, 1),
                'secondary' => rand(0, 1),
                'transcript' => rand(0, 1),
                'completion' => rand(0, 1),
                'gown' => rand(0, 1),
                'diploma' => rand(0, 1),
            ]);
        }
    }
}
