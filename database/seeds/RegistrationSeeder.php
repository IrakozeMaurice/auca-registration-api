<?php

use App\Registration;
use App\Semester;
use App\Student;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RegistrationSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        //get random 100 students
        $students = Student::all()->random(100);
        foreach ($students as $student) {
            //get student department
            $department = $student->department;
            //get random courses from department
            $courses = $department->courses->random(rand(1, 6));

            $registration = Registration::create([
                'student_id' => $student->id,
                'semester_id' => Semester::all()->random(1)->first()->id,
            ]);
            foreach ($courses as $course) {
                $registration->courses()->attach($course, ['group' => $faker->randomElement(['A', 'E'])]);
            }
        }
    }
}
