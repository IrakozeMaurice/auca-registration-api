<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(FacultySeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(SemesterSeeder::class);

        $this->call(DepartmentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(ClearanceSeeder::class);
        $this->call(RegistrationSeeder::class);
    }
}
