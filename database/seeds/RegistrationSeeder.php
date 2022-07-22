<?php

use App\Department;
use App\Registration;
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
            Registration::create([
                'student_id' => $student->id,
                'program' => $faker->randomElement(['Day', 'Evening']),
                'semester' => $faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8'])
            ])->courses()->attach($courses);
        }
    }
}
