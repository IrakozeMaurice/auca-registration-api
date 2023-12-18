<?php

use App\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{

    public function run()
    {
        Program::create([
            'name' => 'DAY'
        ]);

        Program::create([
            'name' => 'EVENING'
        ]);
    }
}
