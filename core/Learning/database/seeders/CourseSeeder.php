<?php

namespace Core\Learning\Database\seeders;

use Core\Learning\Models\Course;
use Core\Learning\Models\Item;
use Core\Learning\Models\Student;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::Factory()->count(5)->create();
    }
}
