<?php

use App\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{

    public function run()
    {
        Faculty::create([
            'name' => 'Information Technology'
        ]);

        Faculty::create([
            'name' => 'Business Administration'
        ]);

        // Faculty::create([
        //     'name' => 'Theology'
        // ]);

        // Faculty::create([
        //     'name' => 'Education'
        // ]);

        // Faculty::create([
        //     'name' => 'Health Sciences/Nursing'
        // ]);
    }
}
