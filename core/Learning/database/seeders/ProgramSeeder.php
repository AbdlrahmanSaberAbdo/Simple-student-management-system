<?php

namespace Core\Learning\Database\seeders;

use Core\Learning\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{

    public function run(): void
    {
        Program::Factory()->count(5)->create();
    }
}
