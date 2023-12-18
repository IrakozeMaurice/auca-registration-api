<?php

use App\Department;
use App\Faculty;
use App\Program;
use App\Student;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        for ($i = 24111; $i <= 24300; $i++) {
            $faculty = Faculty::all()->random(1)->first();
            $department = Department::where('faculty_id', $faculty->id)->get()->random(1)->first();
            Student::create([
                'student_id' => $i,
                'faculty_id' => $faculty->id,
                'program_id' => Program::all()->random(1)->first()->id,
                'department_id' => $department->id,
                'names' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'farg' => rand(0, 1)
            ]);
        }
    }
}
