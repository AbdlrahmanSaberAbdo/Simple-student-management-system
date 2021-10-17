<?php

namespace Core\Learning\Database\seeders;

use Core\Learning\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::Factory()->count(5)->create();
    }
}
