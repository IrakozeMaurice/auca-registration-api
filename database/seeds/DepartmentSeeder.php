<?php

use App\Department;
use App\Faculty;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{

    public function run()
    {
        //Information Technology
        Department::create([
            'faculty_id' => Faculty::where('name', 'Information Technology')->first()->id,
            'name' => 'Information Management'
        ]);
        Department::create([
            'faculty_id' => Faculty::where('name', 'Information Technology')->first()->id,
            'name' => 'Network and Communication Systems'
        ]);
        Department::create([
            'faculty_id' => Faculty::where('name', 'Information Technology')->first()->id,
            'name' => 'Software Engineering'
        ]);

        //Business Administration
        Department::create([
            'faculty_id' => Faculty::where('name', 'Business Administration')->first()->id,
            'name' => 'Management'
        ]);
        Department::create([
            'faculty_id' => Faculty::where('name', 'Business Administration')->first()->id,
            'name' => 'Marketing'
        ]);
        Department::create([
            'faculty_id' => Faculty::where('name', 'Business Administration')->first()->id,
            'name' => 'Finance'
        ]);
        Department::create([
            'faculty_id' => Faculty::where('name', 'Business Administration')->first()->id,
            'name' => 'Accounting'
        ]);

        //Theology
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'Theology'
        // ]);

        //Education
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'History and Geography'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'English and French Literature'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'Educational Psychology and Religion'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'Economics and Mathematics'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'Information Technology and Accounting'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(3)->id,
        //     'name' => 'Accounting and Information Technology'
        // ]);

        //Health Sciences/Nursing
        // Department::create([
        //     'faculty_id' => Faculty::find(4)->id,
        //     'name' => 'Nursing and Midwifery'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(4)->id,
        //     'name' => 'Nursing and Midwifery Entry Requirements'
        // ]);
        // Department::create([
        //     'faculty_id' => Faculty::find(4)->id,
        //     'name' => 'Nursing Free Structure'
        // ]);
    }
}
