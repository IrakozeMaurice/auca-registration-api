<?php

use App\Department;
use App\Teacher;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TeacherSeeder extends Seeder
{
    public function run(Faker $faker)
    {

        for ($i = 0; $i <= 30; $i++) {
            $department = Department::find(rand(1, 7));
            $courses = $department->courses->random(rand(1, 3));
            Department::find(rand(1, 7))->courses->random(rand(1, 3))->count();
            Teacher::create([
                'department_id' => $department->id,
                'names' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
            ])->courses()->attach($courses);
        }
    }
}
